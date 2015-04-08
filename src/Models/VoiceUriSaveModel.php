<?php 
/*
 * APIv3SandboxLib
 *
 * This file was automatically generated by APIMATIC BETA v2.0 on 04/03/2015
 */

namespace APIv3SandboxLib\Models;

use JsonSerializable;

class VoiceUriSaveModel implements JsonSerializable {
    /**
     * The identifier of the voice URI
     * @param int $voiceUriId public property
     */
    protected $voiceUriId;

    /**
     * The identifier of the voice URI used as backup (set to an empty string to remove the backup URI)
     * @param string $backupUriId public property
     */
    protected $backupUriId;

    /**
     * The protocol of the voice URI
     * @param string $voiceUriProtocol public property
     */
    protected $voiceUriProtocol;

    /**
     * The URI where the call will be delivered
     * @param string $uri public property
     */
    protected $uri;

    /**
     * A human readable description of the voice URI
     * @param string $description public property
     */
    protected $description;

    /**
     * Constructor to set initial or default values of member properties
	 * @param   int               $voiceUriId         Initialization value for the property $this->voiceUriId      
	 * @param   string            $backupUriId        Initialization value for the property $this->backupUriId     
	 * @param   string            $voiceUriProtocol   Initialization value for the property $this->voiceUriProtocol
	 * @param   string            $uri                Initialization value for the property $this->uri             
	 * @param   string            $description        Initialization value for the property $this->description     
     */
    public function __construct()
    {
        if(5 == func_num_args())
        {
            $this->voiceUriId       = func_get_arg(0);
            $this->backupUriId      = func_get_arg(1);
            $this->voiceUriProtocol = func_get_arg(2);
            $this->uri              = func_get_arg(3);
            $this->description      = func_get_arg(4);
        }
    }

    /**
     * Return a property of the response if it exists.
     * Possibilities include: code, raw_body, headers, body (if the response is json-decodable)
     * @return mixed
     */
    public function __get($property)
    {
        if (property_exists($this, $property)) {
            //UTF-8 is recommended for correct JSON serialization
            $value = $this->$property;
            if (is_string($value) && mb_detect_encoding($value, "UTF-8", TRUE) != "UTF-8") {
                return utf8_encode($value);
            }
            else {
                return $value;
            }
        }
    }
    
    /**
     * Set the properties of this object
     * @param string $property the property name
     * @param mixed $value the property value
     */
    public function __set($property, $value)
    {
        if (property_exists($this, $property)) {
            //UTF-8 is recommended for correct JSON serialization
            if (is_string($value) && mb_detect_encoding($value, "UTF-8", TRUE) != "UTF-8") {
                $this->$property = utf8_encode($value);
            }
            else {
                $this->$property = $value;
            }
        }

        return $this;
    }

    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['voiceUriId']       = $this->voiceUriId;
        $json['backupUriId']      = $this->backupUriId;
        $json['voiceUriProtocol'] = $this->voiceUriProtocol;
        $json['uri']              = $this->uri;
        $json['description']      = $this->description;
        return $json;
    }
}