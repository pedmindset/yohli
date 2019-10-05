<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\BelongsTo;
use DigitalCloud\NovaResourceNotes\Fields\Notes;
use Ebess\AdvancedNovaMediaLibrary\Fields\Images;
use Benjacho\BelongsToManyField\BelongsToManyField;


class BlogPost extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var  string
     */
    public static $model = \App\Models\BlogPost::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var  string
     */
    public static $title = 'title';

    /**
     * The columns that should be searched.
     *
     * @var  array
     */
    public static $search = [
        'id', 'title'
    ];

    /**
     * Get the displayable label of the resource.
     *
     * @return  string
     */
    public static function label()
    {
        return __('Blog Posts');
    }

    /**
    * Get the displayable singular label of the resource.
    *
    * @return  string
    */
    public static function singularLabel()
    {
        return __('Blog Post');
    }

    /**
     * Get the fields displayed by the resource.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  array
     */
    public function fields(Request $request)
    {
        return [
            ID::make( __('Id'),  'id')
            ->rules('required')
            ->sortable(),
            Images::make('Featured Image', 'featured')
            ->withResponsiveImages(),
            Text::make( __('Title'),  'title')
            ->sortable(),
            BelongsTo::make('Author', 'user', 'App\Nova\User')
            ->searchable()
            ->sortable(),
            BelongsToManyField::make('Categories', 'categories', 'App\Nova\BlogCategory')
            ->options(\App\Models\BlogCategory::all())
            ->nullable(),
            BelongsToManyField::make('Tags', 'tags', 'App\Nova\BlogTag')
            ->options(\App\Models\BlogTag::all())
            ->nullable(),
            Select::make( __('Featured Article'),  'featured')
            ->sortable()
            ->options([
                '0' => 'No',
                '1' => 'Yes',
            ])->displayUsingLabels(),
            Text::make( __('Count'),  'count')
            ->exceptOnForms()
            ->sortable(),
            Trix::make( __('Body'),  'body')->withFiles()
            ->sortable(),
            Notes::make('Notes','notes')->onlyOnDetail(),

            ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
