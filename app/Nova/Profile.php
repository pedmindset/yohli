<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Fields\HasOne;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\Currency;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\BelongsTo;
use DigitalCloud\NovaResourceNotes\Fields\Notes;
use Ebess\AdvancedNovaMediaLibrary\Fields\Images;
use Benjacho\BelongsToManyField\BelongsToManyField;


class Profile extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var  string
     */
    public static $model = \App\Models\Profile::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var  string
     */
    public static $title = 'name';

    /**
     * The columns that should be searched.
     *
     * @var  array
     */
    public static $search = [
        'id', 'name', 'phone', 'email', 'address'
    ];

    /**
     * Get the displayable label of the resource.
     *
     * @return  string
     */
    public static function label()
    {
        return __('Profiles');
    }

    /**
    * Get the displayable singular label of the resource.
    *
    * @return  string
    */
    public static function singularLabel()
    {
        return __('Profile');
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
            Images::make('Profile', 'profile')
                ->withResponsiveImages(),
            ID::make( __('Id'),  'id')
            ->rules('required')
            ->sortable(),
            BelongsTo::make('User')
            ->rules('required')
            ->searchable()
            ->sortable(),
            Text::make( __('Name'),  'name')
            ->rules('required')
            ->sortable(),
            BelongsToManyField::make('Job Categories', 'industries', 'App\Nova\Industry')->options(\App\Models\Industry::all())->nullable(),
            BelongsToManyField::make('Skiils', 'skills', 'App\Nova\Skill')->options(\App\Models\Skill::all())->nullable(),
            BelongsToManyField::make('Attachments', 'attachments', 'App\Nova\ProfileAttachment')->options(\App\Models\Attachment::all())->nullable(),
            Trix::make( __('Description'),  'description')
            ->hideFromIndex()
            ->withFiles('public'),
            Text::make( __('Phone'),  'phone')
            ->sortable(),
            Text::make( __('Email'),  'email')
            ->sortable(),
            Text::make( __('Address'),  'address')
            ->sortable(),
            Text::make( __('City'),  'city')
            ->sortable(),
            HasOne::make('Country')
            ->sortable(),
            Select::make( __('Verified'),  'verified')
            ->sortable()
            ->options([
                '1' => 'Yes',
                '0' => 'No',
            ])->displayUsingLabels(),
            Currency::make( __('Rate'),  'rate')
            ->sortable(),
            HasMany::make('ProfileAttachment'),

            HasMany::make('Job'),

            HasMany::make('SocialLink'),

            HasMany::make('Bid'),

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
