<?php
/**
 * FormatTest
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * OpenAPI Petstore
 *
 * This spec is mainly for testing Petstore server and contains fake endpoints, models. Please do not use this for any other purpose. Special characters: \" \\
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.12.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * FormatTest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class FormatTest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'format_test';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'integer' => 'int',
        'int32' => 'int',
        'int64' => 'int',
        'number' => 'float',
        'float' => 'float',
        'double' => 'float',
        'decimal' => 'float',
        'string' => 'string',
        'byte' => 'string',
        'binary' => '\SplFileObject',
        'date' => '\DateTime',
        'date_time' => '\DateTime',
        'uuid' => 'string',
        'password' => 'string',
        'pattern_with_digits' => 'string',
        'pattern_with_digits_and_delimiter' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'integer' => null,
        'int32' => 'int32',
        'int64' => 'int64',
        'number' => null,
        'float' => 'float',
        'double' => 'double',
        'decimal' => 'number',
        'string' => null,
        'byte' => 'byte',
        'binary' => 'binary',
        'date' => 'date',
        'date_time' => 'date-time',
        'uuid' => 'uuid',
        'password' => 'password',
        'pattern_with_digits' => null,
        'pattern_with_digits_and_delimiter' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'integer' => false,
        'int32' => false,
        'int64' => false,
        'number' => false,
        'float' => false,
        'double' => false,
        'decimal' => false,
        'string' => false,
        'byte' => false,
        'binary' => false,
        'date' => false,
        'date_time' => false,
        'uuid' => false,
        'password' => false,
        'pattern_with_digits' => false,
        'pattern_with_digits_and_delimiter' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'integer' => 'integer',
        'int32' => 'int32',
        'int64' => 'int64',
        'number' => 'number',
        'float' => 'float',
        'double' => 'double',
        'decimal' => 'decimal',
        'string' => 'string',
        'byte' => 'byte',
        'binary' => 'binary',
        'date' => 'date',
        'date_time' => 'dateTime',
        'uuid' => 'uuid',
        'password' => 'password',
        'pattern_with_digits' => 'pattern_with_digits',
        'pattern_with_digits_and_delimiter' => 'pattern_with_digits_and_delimiter'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'integer' => 'setInteger',
        'int32' => 'setInt32',
        'int64' => 'setInt64',
        'number' => 'setNumber',
        'float' => 'setFloat',
        'double' => 'setDouble',
        'decimal' => 'setDecimal',
        'string' => 'setString',
        'byte' => 'setByte',
        'binary' => 'setBinary',
        'date' => 'setDate',
        'date_time' => 'setDateTime',
        'uuid' => 'setUuid',
        'password' => 'setPassword',
        'pattern_with_digits' => 'setPatternWithDigits',
        'pattern_with_digits_and_delimiter' => 'setPatternWithDigitsAndDelimiter'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'integer' => 'getInteger',
        'int32' => 'getInt32',
        'int64' => 'getInt64',
        'number' => 'getNumber',
        'float' => 'getFloat',
        'double' => 'getDouble',
        'decimal' => 'getDecimal',
        'string' => 'getString',
        'byte' => 'getByte',
        'binary' => 'getBinary',
        'date' => 'getDate',
        'date_time' => 'getDateTime',
        'uuid' => 'getUuid',
        'password' => 'getPassword',
        'pattern_with_digits' => 'getPatternWithDigits',
        'pattern_with_digits_and_delimiter' => 'getPatternWithDigitsAndDelimiter'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('integer', $data ?? [], null);
        $this->setIfExists('int32', $data ?? [], null);
        $this->setIfExists('int64', $data ?? [], null);
        $this->setIfExists('number', $data ?? [], null);
        $this->setIfExists('float', $data ?? [], null);
        $this->setIfExists('double', $data ?? [], null);
        $this->setIfExists('decimal', $data ?? [], null);
        $this->setIfExists('string', $data ?? [], null);
        $this->setIfExists('byte', $data ?? [], null);
        $this->setIfExists('binary', $data ?? [], null);
        $this->setIfExists('date', $data ?? [], null);
        $this->setIfExists('date_time', $data ?? [], null);
        $this->setIfExists('uuid', $data ?? [], null);
        $this->setIfExists('password', $data ?? [], null);
        $this->setIfExists('pattern_with_digits', $data ?? [], null);
        $this->setIfExists('pattern_with_digits_and_delimiter', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['integer']) && ($this->container['integer'] > 100)) {
            $invalidProperties[] = "invalid value for 'integer', must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['integer']) && ($this->container['integer'] < 10)) {
            $invalidProperties[] = "invalid value for 'integer', must be bigger than or equal to 10.";
        }

        if (!is_null($this->container['int32']) && ($this->container['int32'] > 200)) {
            $invalidProperties[] = "invalid value for 'int32', must be smaller than or equal to 200.";
        }

        if (!is_null($this->container['int32']) && ($this->container['int32'] < 20)) {
            $invalidProperties[] = "invalid value for 'int32', must be bigger than or equal to 20.";
        }

        if ($this->container['number'] === null) {
            $invalidProperties[] = "'number' can't be null";
        }
        if (($this->container['number'] > 543.2)) {
            $invalidProperties[] = "invalid value for 'number', must be smaller than or equal to 543.2.";
        }

        if (($this->container['number'] < 32.1)) {
            $invalidProperties[] = "invalid value for 'number', must be bigger than or equal to 32.1.";
        }

        if (!is_null($this->container['float']) && ($this->container['float'] > 987.6)) {
            $invalidProperties[] = "invalid value for 'float', must be smaller than or equal to 987.6.";
        }

        if (!is_null($this->container['float']) && ($this->container['float'] < 54.3)) {
            $invalidProperties[] = "invalid value for 'float', must be bigger than or equal to 54.3.";
        }

        if (!is_null($this->container['double']) && ($this->container['double'] > 123.4)) {
            $invalidProperties[] = "invalid value for 'double', must be smaller than or equal to 123.4.";
        }

        if (!is_null($this->container['double']) && ($this->container['double'] < 67.8)) {
            $invalidProperties[] = "invalid value for 'double', must be bigger than or equal to 67.8.";
        }

        if (!is_null($this->container['string']) && !preg_match("/[a-z]/i", $this->container['string'])) {
            $invalidProperties[] = "invalid value for 'string', must be conform to the pattern /[a-z]/i.";
        }

        if ($this->container['byte'] === null) {
            $invalidProperties[] = "'byte' can't be null";
        }
        if ($this->container['date'] === null) {
            $invalidProperties[] = "'date' can't be null";
        }
        if ($this->container['password'] === null) {
            $invalidProperties[] = "'password' can't be null";
        }
        if ((mb_strlen($this->container['password']) > 64)) {
            $invalidProperties[] = "invalid value for 'password', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['password']) < 10)) {
            $invalidProperties[] = "invalid value for 'password', the character length must be bigger than or equal to 10.";
        }

        if (!is_null($this->container['pattern_with_digits']) && !preg_match("/^\\d{10}$/", $this->container['pattern_with_digits'])) {
            $invalidProperties[] = "invalid value for 'pattern_with_digits', must be conform to the pattern /^\\d{10}$/.";
        }

        if (!is_null($this->container['pattern_with_digits_and_delimiter']) && !preg_match("/^image_\\d{1,3}$/i", $this->container['pattern_with_digits_and_delimiter'])) {
            $invalidProperties[] = "invalid value for 'pattern_with_digits_and_delimiter', must be conform to the pattern /^image_\\d{1,3}$/i.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets integer
     *
     * @return int|null
     */
    public function getInteger()
    {
        return $this->container['integer'];
    }

    /**
     * Sets integer
     *
     * @param int|null $integer integer
     *
     * @return self
     */
    public function setInteger($integer)
    {
        if (is_null($integer)) {
            throw new \InvalidArgumentException('non-nullable integer cannot be null');
        }

        if (($integer > 100)) {
            throw new \InvalidArgumentException('invalid value for $integer when calling FormatTest., must be smaller than or equal to 100.');
        }
        if (($integer < 10)) {
            throw new \InvalidArgumentException('invalid value for $integer when calling FormatTest., must be bigger than or equal to 10.');
        }

        $this->container['integer'] = $integer;

        return $this;
    }

    /**
     * Gets int32
     *
     * @return int|null
     */
    public function getInt32()
    {
        return $this->container['int32'];
    }

    /**
     * Sets int32
     *
     * @param int|null $int32 int32
     *
     * @return self
     */
    public function setInt32($int32)
    {
        if (is_null($int32)) {
            throw new \InvalidArgumentException('non-nullable int32 cannot be null');
        }

        if (($int32 > 200)) {
            throw new \InvalidArgumentException('invalid value for $int32 when calling FormatTest., must be smaller than or equal to 200.');
        }
        if (($int32 < 20)) {
            throw new \InvalidArgumentException('invalid value for $int32 when calling FormatTest., must be bigger than or equal to 20.');
        }

        $this->container['int32'] = $int32;

        return $this;
    }

    /**
     * Gets int64
     *
     * @return int|null
     */
    public function getInt64()
    {
        return $this->container['int64'];
    }

    /**
     * Sets int64
     *
     * @param int|null $int64 int64
     *
     * @return self
     */
    public function setInt64($int64)
    {
        if (is_null($int64)) {
            throw new \InvalidArgumentException('non-nullable int64 cannot be null');
        }
        $this->container['int64'] = $int64;

        return $this;
    }

    /**
     * Gets number
     *
     * @return float
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param float $number number
     *
     * @return self
     */
    public function setNumber($number)
    {
        if (is_null($number)) {
            throw new \InvalidArgumentException('non-nullable number cannot be null');
        }

        if (($number > 543.2)) {
            throw new \InvalidArgumentException('invalid value for $number when calling FormatTest., must be smaller than or equal to 543.2.');
        }
        if (($number < 32.1)) {
            throw new \InvalidArgumentException('invalid value for $number when calling FormatTest., must be bigger than or equal to 32.1.');
        }

        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets float
     *
     * @return float|null
     */
    public function getFloat()
    {
        return $this->container['float'];
    }

    /**
     * Sets float
     *
     * @param float|null $float float
     *
     * @return self
     */
    public function setFloat($float)
    {
        if (is_null($float)) {
            throw new \InvalidArgumentException('non-nullable float cannot be null');
        }

        if (($float > 987.6)) {
            throw new \InvalidArgumentException('invalid value for $float when calling FormatTest., must be smaller than or equal to 987.6.');
        }
        if (($float < 54.3)) {
            throw new \InvalidArgumentException('invalid value for $float when calling FormatTest., must be bigger than or equal to 54.3.');
        }

        $this->container['float'] = $float;

        return $this;
    }

    /**
     * Gets double
     *
     * @return float|null
     */
    public function getDouble()
    {
        return $this->container['double'];
    }

    /**
     * Sets double
     *
     * @param float|null $double double
     *
     * @return self
     */
    public function setDouble($double)
    {
        if (is_null($double)) {
            throw new \InvalidArgumentException('non-nullable double cannot be null');
        }

        if (($double > 123.4)) {
            throw new \InvalidArgumentException('invalid value for $double when calling FormatTest., must be smaller than or equal to 123.4.');
        }
        if (($double < 67.8)) {
            throw new \InvalidArgumentException('invalid value for $double when calling FormatTest., must be bigger than or equal to 67.8.');
        }

        $this->container['double'] = $double;

        return $this;
    }

    /**
     * Gets decimal
     *
     * @return float|null
     */
    public function getDecimal()
    {
        return $this->container['decimal'];
    }

    /**
     * Sets decimal
     *
     * @param float|null $decimal decimal
     *
     * @return self
     */
    public function setDecimal($decimal)
    {
        if (is_null($decimal)) {
            throw new \InvalidArgumentException('non-nullable decimal cannot be null');
        }
        $this->container['decimal'] = $decimal;

        return $this;
    }

    /**
     * Gets string
     *
     * @return string|null
     */
    public function getString()
    {
        return $this->container['string'];
    }

    /**
     * Sets string
     *
     * @param string|null $string string
     *
     * @return self
     */
    public function setString($string)
    {
        if (is_null($string)) {
            throw new \InvalidArgumentException('non-nullable string cannot be null');
        }

        if ((!preg_match("/[a-z]/i", ObjectSerializer::toString($string)))) {
            throw new \InvalidArgumentException("invalid value for \$string when calling FormatTest., must conform to the pattern /[a-z]/i.");
        }

        $this->container['string'] = $string;

        return $this;
    }

    /**
     * Gets byte
     *
     * @return string
     */
    public function getByte()
    {
        return $this->container['byte'];
    }

    /**
     * Sets byte
     *
     * @param string $byte byte
     *
     * @return self
     */
    public function setByte($byte)
    {
        if (is_null($byte)) {
            throw new \InvalidArgumentException('non-nullable byte cannot be null');
        }
        $this->container['byte'] = $byte;

        return $this;
    }

    /**
     * Gets binary
     *
     * @return \SplFileObject|null
     */
    public function getBinary()
    {
        return $this->container['binary'];
    }

    /**
     * Sets binary
     *
     * @param \SplFileObject|null $binary binary
     *
     * @return self
     */
    public function setBinary($binary)
    {
        if (is_null($binary)) {
            throw new \InvalidArgumentException('non-nullable binary cannot be null');
        }
        $this->container['binary'] = $binary;

        return $this;
    }

    /**
     * Gets date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \DateTime $date date
     *
     * @return self
     */
    public function setDate($date)
    {
        if (is_null($date)) {
            throw new \InvalidArgumentException('non-nullable date cannot be null');
        }
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets date_time
     *
     * @return \DateTime|null
     */
    public function getDateTime()
    {
        return $this->container['date_time'];
    }

    /**
     * Sets date_time
     *
     * @param \DateTime|null $date_time date_time
     *
     * @return self
     */
    public function setDateTime($date_time)
    {
        if (is_null($date_time)) {
            throw new \InvalidArgumentException('non-nullable date_time cannot be null');
        }
        $this->container['date_time'] = $date_time;

        return $this;
    }

    /**
     * Gets uuid
     *
     * @return string|null
     */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
     * Sets uuid
     *
     * @param string|null $uuid uuid
     *
     * @return self
     */
    public function setUuid($uuid)
    {
        if (is_null($uuid)) {
            throw new \InvalidArgumentException('non-nullable uuid cannot be null');
        }
        $this->container['uuid'] = $uuid;

        return $this;
    }

    /**
     * Gets password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     *
     * @param string $password password
     *
     * @return self
     */
    public function setPassword($password)
    {
        if (is_null($password)) {
            throw new \InvalidArgumentException('non-nullable password cannot be null');
        }
        if ((mb_strlen($password) > 64)) {
            throw new \InvalidArgumentException('invalid length for $password when calling FormatTest., must be smaller than or equal to 64.');
        }
        if ((mb_strlen($password) < 10)) {
            throw new \InvalidArgumentException('invalid length for $password when calling FormatTest., must be bigger than or equal to 10.');
        }

        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets pattern_with_digits
     *
     * @return string|null
     */
    public function getPatternWithDigits()
    {
        return $this->container['pattern_with_digits'];
    }

    /**
     * Sets pattern_with_digits
     *
     * @param string|null $pattern_with_digits A string that is a 10 digit number. Can have leading zeros.
     *
     * @return self
     */
    public function setPatternWithDigits($pattern_with_digits)
    {
        if (is_null($pattern_with_digits)) {
            throw new \InvalidArgumentException('non-nullable pattern_with_digits cannot be null');
        }

        if ((!preg_match("/^\\d{10}$/", ObjectSerializer::toString($pattern_with_digits)))) {
            throw new \InvalidArgumentException("invalid value for \$pattern_with_digits when calling FormatTest., must conform to the pattern /^\\d{10}$/.");
        }

        $this->container['pattern_with_digits'] = $pattern_with_digits;

        return $this;
    }

    /**
     * Gets pattern_with_digits_and_delimiter
     *
     * @return string|null
     */
    public function getPatternWithDigitsAndDelimiter()
    {
        return $this->container['pattern_with_digits_and_delimiter'];
    }

    /**
     * Sets pattern_with_digits_and_delimiter
     *
     * @param string|null $pattern_with_digits_and_delimiter A string starting with 'image_' (case insensitive) and one to three digits following i.e. Image_01.
     *
     * @return self
     */
    public function setPatternWithDigitsAndDelimiter($pattern_with_digits_and_delimiter)
    {
        if (is_null($pattern_with_digits_and_delimiter)) {
            throw new \InvalidArgumentException('non-nullable pattern_with_digits_and_delimiter cannot be null');
        }

        if ((!preg_match("/^image_\\d{1,3}$/i", ObjectSerializer::toString($pattern_with_digits_and_delimiter)))) {
            throw new \InvalidArgumentException("invalid value for \$pattern_with_digits_and_delimiter when calling FormatTest., must conform to the pattern /^image_\\d{1,3}$/i.");
        }

        $this->container['pattern_with_digits_and_delimiter'] = $pattern_with_digits_and_delimiter;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


