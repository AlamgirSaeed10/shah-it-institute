<?php
                    $link = "";
                    $title = "";
                    $pubdate = "";
                    $category ="";
                    
                    $map_url = "https://www.techrepublic.com/rssfeeds/topic/tech-industry/"; 
                    if (($response_xml_data = file_get_contents($map_url))===false){
                        echo "Error fetching XML\n";
                    } else {
                    libxml_use_internal_errors(true);
                    $data = simplexml_load_string($response_xml_data);
                    if (!$data) {
                        echo "Error loading XML\n";
                        foreach(libxml_get_errors() as $error) {
                            echo "\t", $error->message;
                        }
                    } else {
                        //   print_r($data);
                        //   $xml = simplexml_load_string($xmlString);
                        
                            $category  =  $data->channel->category;

                        foreach($data->channel->item as $item)
                        {
                            $link =  (string)$item->link;
                            $title = (string)$item->title;
                       
                        }
                        echo $category;
                    }
                }?>