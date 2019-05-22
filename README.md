# Statamic-Collection_Search_Updater

Automatically update a collection's search index when an entry is saved

NOTE:

- Must select the collection(s) in addon settings
- `v1.1` now accepts more than one collection!
- and you must make sure the collection is set up for indexing per the [Statamic Docs](https://docs.statamic.com/search#collection-indexes)
- This only matters if you're using the `collection` parameter on the [search results tag](https://docs.statamic.com/tags/search#parameters) 
```
    {{ search:results collection="foo" }}
        ...
    {{ /search:results }}
```
Otherwise, collections are part of the default index and is updated automatically if Search auto-index is enabled in your settings. 
