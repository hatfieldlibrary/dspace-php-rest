<?php

Class Configuration {

    private array $config;

    public function __construct() {
        // DSpace API settings
        $this->config = array(
            /**
             * Base url of DSpace REST API
             */
            "base"=>"http://localhost:8080/server/api",
            /**
             * Solr server (used for custom bitstream search)
             */
            "solr"=>"http://localhost:8983/solr",
            "solr_core" => "bitstreams",
            /**
             * The default DSpace scope. Used for search.
             */
            "scope" => "602c3c60-55f8-4e2f-98bb-1f280a818bfe",
            //"scope" => "d7ae580e-e8f7-4cd1-a7e4-3002882fbd0e",
            /**
             * The maximum number of items returned in requests for DSpace objects (e.g. Items, Collections).
             */
            "defaultPageSize" => 24,
            /**
             * The maximum number of embedded bitstreams (e.g. images) returned when retrieving images.
             * The bitstreams are retrieved as embedded elements in the bundle. Pagination is not currently
             * supported by this application.
             */
            "defaultEmbeddedBitstreamParam" => 60,
            /**
             * Default image used in no thumbnail is available.
             */
            "defaultThumbnail" => "/mimi/mimi_default_thumbnail.svg",
            /**
             * Default image used for videos.
             */
            "defaultVideoThumbnail" => "/mimi/default_video_thumbnail.svg",
            /**
             * Retrieve item counts for collections. There may be a performance hit when set to true.
             * Item counts can also be retrieved asynchronously via the <code>api/collections/<:uuid>/itemcount</code>
             * endpoint.
             */
            "retrieveItemCounts" => true,
            /**
             * When true all DSpace API requests, responses and key lookups are written to the log file.
             * This is verbose. The value should be false when not actively debugging or developing.
             */
            "debug" => false
        );
    }

    public function getConfig(): array {
        return $this->config;
    }

}
