(function($){
    "use strict";
    $(document).ready(function(){
        /*--------------------------------------------------*/
        /*  Custom Tabs
        /*--------------------------------------------------*/
        var Tabs = (function () {

            'use strict';
          
            //=== Cut the Mustard ===//
          
            if (!window.addEventListener && !document.querySelector && !document.documentElement.classList && !Array.prototype.forEach ) {
              return;
            }
          
          
            //=== Private Variables ===//
            var tab = document.querySelectorAll('.js-tab');
            var settings = {
              initClass: 'js',
              activeClass: 'is-active',
              enhancedClass: 'is-enhanced'
            };
          
          
            //=== Methods ===//
          
            /**
             * A simple forEach() implementation for Arrays, Objects and NodeLists
             */
            var forEach = function (collection, callback, scope) {
              if (Object.prototype.toString.call(collection) === '[object Object]') {
                for (var prop in collection) {
                  if (Object.prototype.hasOwnProperty.call(collection, prop)) {
                    callback.call(scope, collection[prop], prop, collection);
                  }
                }
              } else {
                for (var i = 0, len = collection.length; i < len; i++) {
                  callback.call(scope, collection[i], i, collection);
                }
              }
            };
          
            /**
             * Get the closest matching element up the DOM tree
             */
            var getClosest = function (elem, selector) {
              var firstChar = selector.charAt(0);
              for ( ; elem && elem !== document; elem = elem.parentNode ) {
                if ( firstChar === '.' ) {
                  if ( elem.classList.contains( selector.substr(1) ) ) {
                    return elem;
                  }
                } else if ( firstChar === '#' ) {
                  if ( elem.id === selector.substr(1) ) {
                    return elem;
                  }
                } else if ( firstChar === '[' ) {
                  if ( elem.hasAttribute( selector.substr(1, selector.length - 2) ) ) {
                    return elem;
                  }
                }
              }
              return false;
            };
          
            /**
             * Get siblings of an element
             */
            var getSiblings = function (elem) {
              var siblings = [];
              var sibling = elem.parentNode.firstChild;
              var skipMe = elem;
              for ( ; sibling; sibling = sibling.nextSibling ) {
                if ( sibling.nodeType == 1 && sibling != elem ) {
                  siblings.push( sibling );
                }
              }
              return siblings;
            };
          
            /**
             * Throttle
             */
            var throttle = function(callback, limit) {
              var wait = false;
              return function () {
                if (!wait) {
                  callback.call();
                  wait = true;
                  setTimeout(function () {
                    wait = false;
                  }, limit);
                }
              };
            };
          
            /**
             * Create Enhanced Tab Navigation
             */
            var createNav = function () {
              var tabContent;
          
              forEach(tab, function (value) {
                var nav = document.createElement("nav");
                var navContents = "";
                nav.setAttribute("class", "tab__nav");
                tabContent = value.children;
          
                // Construct links
                forEach(tabContent, function (item) {
                  var id = item.getAttribute('ID');
                  var tabHeader = item.children[0];
                  var tabHeaderText = tabHeader.textContent;
                  var links = tabHeaderText.charAt(0) + tabHeaderText.substring(1);
                  var newLine = '<a href="#' + id + '"' + 'data-tab=link>' + tabHeaderText + '</a>';
                  navContents += newLine;
                });
          
                // Insert Nav into document
                nav.insertAdjacentHTML('beforeend', navContents);
                value.insertBefore(nav, value.firstChild);
              });
          
            };
          
            /**
             * Tab Default
             * Hide all tab content except first
             */
            var tabDefault = function() {
              forEach(tab, function (value, index) {
                var tabContent = value.children;
                var tabNavLinks = value.children[0].childNodes;
          
                // Add active class to first tab content element in each tab
                forEach(tabContent, function (value, index) {
                  if ( index == 1) {
                    value.classList.add(settings.activeClass);
                  }
                });
          
                // Add active class to first tab nav link
                forEach(tabNavLinks, function (value, index) {
                  if ( index == 0) {
                    value.classList.add(settings.activeClass);
                  }
                });
          
              });
            };
          
            /**
             * Toggle tab content
             */
            var toggleContent = function(toggle) {
              var toggleType = toggle.getAttribute('data-tab');
          
              if (toggleType == "header") {
                toggle.parentNode.classList.add(settings.activeClass);
                clearSiblings(toggle.parentNode);
              } else if (toggleType == "link") {
                var target = toggle.getAttribute('href');
                var content = document.querySelector(target);
                toggle.classList.add(settings.activeClass);
                content.classList.add(settings.activeClass);
                clearSiblings(toggle);
                clearSiblings(content);
              } else {
                return;
              }
          
            };
          
            /**
             * Clear Siblings
             */
            var clearSiblings = function(element) {
              var siblings = getSiblings(element);
              forEach(siblings, function (value) {
                value.classList.remove(settings.activeClass);
              });
            };
          
            /**
             * Calculate tab space for enhancements
             */
            var calcSpace = function() {
              var tabWidth = 0;
              var tabNavWidth = 0;
          
              forEach(tab, function (value) {
                tabWidth = value.offsetWidth;
                tabNavWidth = value.children[0].offsetWidth;
          
                if (tabWidth > tabNavWidth) {
                  value.classList.add(settings.enhancedClass);
                } else if (value.classList.contains(settings.enhancedClass) ) {
                  value.classList.remove(settings.enhancedClass);
                } else {
                  return;
                }
          
              });
            };
          
            /**
             * Check for Active Tab
             */
            var checkActiveLink = function () {
              var tabContent;
              var tabId;
              var tabLinkValue;
          
              forEach(tab, function (value, index) {
                tabContent = value.children;
                var tabNav = value.children[0];
                var tabNavLink = tabNav.children;
          
                forEach(tabContent, function (value, index) {
                  if ( index !== 0 && value.classList.contains(settings.activeClass) ) {
                    tabId = value.getAttribute('ID');
                  }
                });
          
                forEach(tabNavLink, function (value) {
                  tabLinkValue = value.getAttribute('href');
                  if ( tabLinkValue == '#' + tabId ) {
                    value.classList.add(settings.activeClass);
                    clearSiblings(value);
                  } else {
                    return;
                  }
                });
          
              });
          
            };
          
            /**
             * Handle toggle click events
             */
            var eventHandler = function (event) {
              var toggle = getClosest(event.target, '[data-tab]');
              if ( toggle ) {
                toggleContent(toggle);
                event.preventDefault();
              }
            };
          
            /**
             * Resize event
             */
            var onResize = throttle(function() {
              calcSpace();
              checkActiveLink();
            }, 100);
          
          
            function init() {
          
              // Add 'js' class to HTML element for progressive-enhanced CSS
              document.documentElement.classList.add( settings.initClass );
          
              // Listen for all click events
              document.addEventListener('click', eventHandler, false);
          
              // Listen for resize event
              window.addEventListener('resize', onResize);
              
              // Create tab navigation
              createNav();
          
              // Calculate space
              calcSpace();
          
              // Kick things off with default method
              tabDefault();
          
            }
          
            //=== Make Methods Public ===//
            return {
              init: init
            };
          
          })();
          
          Tabs.init();

        
    });
})(this.jQuery);