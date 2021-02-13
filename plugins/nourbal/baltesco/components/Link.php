<?php namespace Nourbal\Baltesco\Components;

use Cms\Classes\ComponentBase;
use Nourbal\Baltesco\Models\Link as LinkModel;


class Link extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Link Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [
            'filter_type' => [
                'title' => 'filter type',
                'description' => 'what do you want to show links or quotes...',
                'default' => '',
                'type' => 'dropdown',
                'options' => [
                    'social_network' => 'show social network links',
                    'quotes' => 'show quotes',
                    'number' => 'show number',
                ],
                'group' => 'Filters'
            ],
        ];
    }

    public function onRender() 
    {
        $this->page['filter_type'] = $this->property('filter_type');
    }
    public function onRun()
    {
        # link of facebook in frontend
        $this->page['links'] = LinkModel::isSocialNetwork()->get();
        $this->page['quote_title'] = LinkModel::quoteTitle();
        $this->page['number'] = LinkModel::numberWebsite();
    }

}
