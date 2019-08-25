@extends('layouts.master')
@section('title', 'How it works')

@section('content')

<div class="bg-light-custom">

    <div class="container hiw-page">
        <div class="row my-5 margin-top-100 margin-bottom-100 justify-content-center align-items-center">
            <div class="col-md-6">
                <h3 class="font-weight-light hiw-header">How Yohli Works</h3>
                <h1 class="hiw-big-text hiw-header">
                    Get the most from Yohli and live your work dream.
                </h1>
                <p>Yohli connects clients to expert freelancers who are available to hire by the hour or project.</p>
            </div>
            <div class="col-md-6">
                <img class="floating img-center img-fluid header-img" src="{{ asset('assets/images/ill/question.svg') }}">
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <section class="tab js-tab">
                  <article class="tab__content" id="tab-one">
                    <h1 class="tab__title" data-tab="header">Looking to hire</h1>
                    <div class="tab__body" data-tab="body">
                        <div class="row align-items-center">
                            <div class="col-md-6 col-sm-12">
                                <h1 class="section-head">Easily find quality matches</h1>
                                <p class="pt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                    Mauris non gravida arcu. Nam scelerisque nunc commodo sem accumsan, vitae scelerisque urna facilisis. 
                                    Fusce non sagittis libero, bibendum feugiat mi. Donec eget augue nec lorem bibendum bibendum tincidunt a lorem. 
                                    Vivamus lacinia neque odio, in dapibus nulla rhoncus eu. Duis ut felis nec libero consectetur dictum eu eget est. 
                                    Phasellus varius libero sed commodo porta. Aliquam et lacus tincidunt, 
                                    tincidunt ipsum eget, ornare augue. Morbi blandit fermentum nibh, non aliquam est vestibulum eu. 
                                </p>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <img class="img-center" src="https://www.upwork.com/ab/assets/Adquiro/5db88cd/wp/images/find-CL.eac27d3a9e54.svg">
                            </div>
                        </div>

                        <div class="row pt-4 align-items-center">
                            <div class="col-md-6 col-sm-12">
                                <img class="img-center" src="https://www.upwork.com/ab/assets/Adquiro/5db88cd/wp/images/hire.9f5208d54080.svg">
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <h1 class="section-head">Hire the best</h1>
                                <p class="pt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                    Mauris non gravida arcu. Nam scelerisque nunc commodo sem accumsan, vitae scelerisque urna facilisis. 
                                    Fusce non sagittis libero, bibendum feugiat mi. Donec eget augue nec lorem bibendum bibendum tincidunt a lorem. 
                                    Vivamus lacinia neque odio, in dapibus nulla rhoncus eu. Duis ut felis nec libero consectetur dictum eu eget est. 
                                    Phasellus varius libero sed commodo porta. Aliquam et lacus tincidunt, 
                                    tincidunt ipsum eget, ornare augue. Morbi blandit fermentum nibh, non aliquam est vestibulum eu. 
                                </p>
                            </div>
                        </div>

                        <div class="row pt-4 align-items-center">
                            <div class="col-md-6 col-sm-12">
                                <h1 class="section-head">Work efficiently, effectively</h1>
                                <p class="pt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                    Mauris non gravida arcu. Nam scelerisque nunc commodo sem accumsan, vitae scelerisque urna facilisis. 
                                    Fusce non sagittis libero, bibendum feugiat mi. Donec eget augue nec lorem bibendum bibendum tincidunt a lorem. 
                                    Vivamus lacinia neque odio, in dapibus nulla rhoncus eu. Duis ut felis nec libero consectetur dictum eu eget est. 
                                    Phasellus varius libero sed commodo porta. Aliquam et lacus tincidunt, 
                                    tincidunt ipsum eget, ornare augue. Morbi blandit fermentum nibh, non aliquam est vestibulum eu. 
                                </p>
                            </div>
                            <div class="col-md-2"></div>
                            <div class="col-md-4 col-sm-12">
                                <img class="img-center" src="https://www.upwork.com/ab/assets/Adquiro/5db88cd/wp/images/work.4f748c9707ba.svg" height="400px">
                            </div>
                        </div>

                        <div class="row pt-4 align-items-center">
                            <div class="col-md-6 col-sm-12">
                                <img src="https://www.upwork.com/ab/assets/Adquiro/5db88cd/wp/images/payment.e26f09fb5308.svg">
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <h1 class="section-head">Pay easily, with peace of mind</h1>
                                <p class="pt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                    Mauris non gravida arcu. Nam scelerisque nunc commodo sem accumsan, vitae scelerisque urna facilisis. 
                                    Fusce non sagittis libero, bibendum feugiat mi. Donec eget augue nec lorem bibendum bibendum tincidunt a lorem. 
                                    Vivamus lacinia neque odio, in dapibus nulla rhoncus eu. Duis ut felis nec libero consectetur dictum eu eget est. 
                                    Phasellus varius libero sed commodo porta. Aliquam et lacus tincidunt, 
                                    tincidunt ipsum eget, ornare augue. Morbi blandit fermentum nibh, non aliquam est vestibulum eu. 
                                </p>
                            </div>
                        </div>

                    </div>
                  </article>
                
                  <article class="tab__content" id="tab-two">
                    <h1 class="tab__title" data-tab="header">Wanting to be hired</h1>
                    <div class="tab__body" data-tab="body">
                        <p>YES, Wanting to be hired.</p>
                    </div>
                  </article>
                </section>
            </div>
        </div>

    </div>

</div>

@endsection