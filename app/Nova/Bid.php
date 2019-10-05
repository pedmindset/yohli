<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Currency;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\BelongsTo;
use DigitalCloud\NovaResourceNotes\Fields\Notes;


class Bid extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var  string
     */
    public static $model = \App\Models\Bid::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var  string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var  array
     */
    public static $search = [
        'id', 'profile_id'
    ];

    /**
     * Get the displayable label of the resource.
     *
     * @return  string
     */
    public static function label()
    {
        return __('Bids');
    }

    /**
    * Get the displayable singular label of the resource.
    *
    * @return  string
    */
    public static function singularLabel()
    {
        return __('Bid');
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
            BelongsTo::make('User Profile', 'profile', 'App\Nova\Profile')
            ->searchable()
            ->sortable(),
            BelongsTo::make('Job')
            ->searchable()
            ->sortable(),
            Currency::make( __('Rate'),  'rate')
            ->sortable(),
            Number::make( __('Delivery Time'),  'delivery_time')
            ->sortable(),
            Select::make( __('Delivery Type'),  'delivery_type')
            ->sortable()
            ->options([
                            'days' => 'days',
                            'hours' => 'hours',
                        ]),
            Select::make( __('Status'),  'status')
            ->sortable()
            ->options([
                            'pending' => 'pending',
                            'active' => 'active',
                            'delayed' => 'delayed',
                            'completed' => 'completed',
                        ]),
            Trix::make( __('Description'),  'description')
            ->sortable()
            ->withFiles('public'),

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
