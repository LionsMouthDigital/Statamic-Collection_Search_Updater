<?php

namespace Statamic\Addons\UpdateCollectionSearch;

use Statamic\Data\Entries\Entry;
use Statamic\Extend\Listener;
use Statamic\API\Search;

class UpdateCollectionSearchListener extends Listener
{
    /**
     * The events to be listened for, and the methods to call.
     *
     * @var array
     */
    public $events = ['cp.entry.published' => 'handleAgentAdded'];

    public function handleAgentAdded(Entry $entry)
    {
      if ($entry->collectionName() == $this->getConfig('collection_to_index', null)) {
        $index = 'collections/' . $this->getConfig('collection_to_index', null);
        
        Search::update($index);
      }
    }
}