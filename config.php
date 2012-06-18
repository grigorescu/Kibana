<?php

$KIBANA_CONFIG = array(
  // Your elastic search server
  'elasticsearch_server' => "localhost:9200",

  // URL path to kibana. Apache users can safely leave this
  // blank in most situations.
  'app_path' => '',

  // The record type as defined in your logstash configuration.
  // Seperate multiple types with a comma, no spaces. Leave blank
  // for all.
  'type' => '',

  // Results to show per page
  'results_per_page' => 50,

  // You may wish to insert a default search which all user searches
  // must match. For example @source_host:www1 might only show results
  // from www1.
  'filter_string' => '',

  // When searching, Kibana will attempt to only search indices
  // that match your timeframe, to make searches faster. You can
  // turn this behavior off if you use something other than daily
  // indexing
  'smart_index' => true,

  // *NOTE*: With the move to segmented loading the setting below is largely 
  // obsolete since Kibana only hits one index at a time. I'm leaving the 
  // setting anyway since it is imaginable that there may be some case in which         
  // searching 1 index at a time over a certain threshold may not be desirable  

  // ElasticSearch has a default limit on URL size for REST calls,
  // so Kibana will fall back to ts if a search spans too many
  // indices. Use this to set that 'too many' number. 
  'smart_index_limit' => 60,

  // When using analyze, use this many of the most recent
  // results for user's query
  'analyze_limit' => 20000,

  // Show this many results in analyze/ mode
  'analyze_show' => 25,

  // Show this many results in an rss feed
  'rss_show' => 20,

   // Show this many results in an exported file
  'export_show' => 2000,

  // Delimit exported file fields with what?
  // You may want to change this to something like "\t" (tab) if you have
  // commas in your logs
  'export_delimiter' => ",",

  // By default, Kibana will look for grok/filter defined fields
  // in your results. Logstash has some default fields that it also
  // supplies. You might want to enable or disable some of those.
  'default_fields' => array(
    'ts',
	'to',
	'subject',
	'from',
	'helo',
	'rcptto',
	'path',
	'user_agent',
	'resp_pkts',
	'orig_pkts',
	'local_orig',
	'proto',
	'orig_bytes',
	'conn_state',
	'history',
	'duration',
	'resp_ip_bytes',
	'resp_bytes',
	'orig_ip_bytes',
	'service',
	'priority',
	'action',
	'message',
	'query',
	'rcode',
	'answers',
	'qclass',
	'qtype',
	'rcode_name',
	'qclass_name',
	'AA',
	'TTLs',
	'session_id',
	'last_alert',
	'version',
	'server_name',
	'cipher',
	'issuer_subject',
	'dst',
	'peer_descr',
	'msg',
	'dropped',
	'metric_index.host',
	'p',
	'actions',
	'resp_size',
	'client',
	'status',
	'direction',
	'server',
	'remote_location.country_code',
	'location',
	'port_proto',
	'port_num',
	'facility',
	'severity',
	'host_p',
	'name',
	'url',
	'unparsed_version',
	'software_type',
	'request_body_len',
	'response_body_len',
	'uri',
	'username',
	'referrer',
	'mime_type',
	'md5',
	'filename',
	'method',
	'content_len',
	'nick',
	'value',
	'command',
	'user',
	'file_size',
	'reply_msg',
	'mime_desc',
	'notice',
	'failure_reason',
  ),

  // You probably don't want to touch anything below this line
  // unless you really know what you're doing

  // Primary field. By default Elastic Search has a special
  // field called ts that is searched when no field is specified.
  // Dropping ts can reduce index size significantly. If you do that
  // you'll need to change primary_field to be '@message'
  'primary_field' => '_source',

  // Default Elastic Search index to query
  'default_index' => 'bro',

  // default search settings
  'default_search' => array(
    'search' => '*',
    'fields' => '',
    'time' => '',
    'offset' => 0,
    'analyze_field' => '',
    ),


  'local_timezone' => date_default_timezone_get(),

  // Prevent wildcard search terms which result in extremely slow queries
  // See: http://www.elasticsearch.org/gtse/reference/query-dsl/wildcard-query.html
  'disable_fullscan' => false,
  );
