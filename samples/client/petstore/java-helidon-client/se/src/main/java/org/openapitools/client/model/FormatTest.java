/**
 * OpenAPI Petstore
 * This spec is mainly for testing Petstore server and contains fake endpoints, models. Please do not use this for any other purpose. Special characters: \" \\
 *
 * The version of the OpenAPI document: 1.0.0
 * 
 *
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

package org.openapitools.client.model;

import com.fasterxml.jackson.annotation.JsonInclude;
import com.fasterxml.jackson.annotation.JsonProperty;
import com.fasterxml.jackson.annotation.JsonCreator;
import com.fasterxml.jackson.annotation.JsonTypeName;
import com.fasterxml.jackson.annotation.JsonValue;
import java.io.File;
import java.math.BigDecimal;
import java.time.LocalDate;
import java.time.OffsetDateTime;
import java.util.UUID;




public class FormatTest  {
  
  private Integer integer;

  private Integer int32;

  private Long int64;

  private BigDecimal number;

  private Float _float;

  private Double _double;

  private BigDecimal decimal;

  private String string;

  private byte[] _byte;

  private File binary;

  private LocalDate date;

  private OffsetDateTime dateTime;

  private UUID uuid;

  private String password;

 /**
   * A string that is a 10 digit number. Can have leading zeros.
  **/
  private String patternWithDigits;

 /**
   * A string starting with 'image_' (case insensitive) and one to three digits following i.e. Image_01.
  **/
  private String patternWithDigitsAndDelimiter;

 /**
   * Get integer
   * minimum: 10
   * maximum: 100
   * @return integer
  **/
  public Integer getInteger() {
    return integer;
  }

  /**
    * Set integer
  **/
  public void setInteger(Integer integer) {
    this.integer = integer;
  }

  public FormatTest integer(Integer integer) {
    this.integer = integer;
    return this;
  }

 /**
   * Get int32
   * minimum: 20
   * maximum: 200
   * @return int32
  **/
  public Integer getInt32() {
    return int32;
  }

  /**
    * Set int32
  **/
  public void setInt32(Integer int32) {
    this.int32 = int32;
  }

  public FormatTest int32(Integer int32) {
    this.int32 = int32;
    return this;
  }

 /**
   * Get int64
   * @return int64
  **/
  public Long getInt64() {
    return int64;
  }

  /**
    * Set int64
  **/
  public void setInt64(Long int64) {
    this.int64 = int64;
  }

  public FormatTest int64(Long int64) {
    this.int64 = int64;
    return this;
  }

 /**
   * Get number
   * minimum: 32.1
   * maximum: 543.2
   * @return number
  **/
  public BigDecimal getNumber() {
    return number;
  }

  /**
    * Set number
  **/
  public void setNumber(BigDecimal number) {
    this.number = number;
  }

  public FormatTest number(BigDecimal number) {
    this.number = number;
    return this;
  }

 /**
   * Get _float
   * minimum: 54.3
   * maximum: 987.6
   * @return _float
  **/
  public Float getFloat() {
    return _float;
  }

  /**
    * Set _float
  **/
  public void setFloat(Float _float) {
    this._float = _float;
  }

  public FormatTest _float(Float _float) {
    this._float = _float;
    return this;
  }

 /**
   * Get _double
   * minimum: 67.8
   * maximum: 123.4
   * @return _double
  **/
  public Double getDouble() {
    return _double;
  }

  /**
    * Set _double
  **/
  public void setDouble(Double _double) {
    this._double = _double;
  }

  public FormatTest _double(Double _double) {
    this._double = _double;
    return this;
  }

 /**
   * Get decimal
   * @return decimal
  **/
  public BigDecimal getDecimal() {
    return decimal;
  }

  /**
    * Set decimal
  **/
  public void setDecimal(BigDecimal decimal) {
    this.decimal = decimal;
  }

  public FormatTest decimal(BigDecimal decimal) {
    this.decimal = decimal;
    return this;
  }

 /**
   * Get string
   * @return string
  **/
  public String getString() {
    return string;
  }

  /**
    * Set string
  **/
  public void setString(String string) {
    this.string = string;
  }

  public FormatTest string(String string) {
    this.string = string;
    return this;
  }

 /**
   * Get _byte
   * @return _byte
  **/
  public byte[] getByte() {
    return _byte;
  }

  /**
    * Set _byte
  **/
  public void setByte(byte[] _byte) {
    this._byte = _byte;
  }

  public FormatTest _byte(byte[] _byte) {
    this._byte = _byte;
    return this;
  }

 /**
   * Get binary
   * @return binary
  **/
  public File getBinary() {
    return binary;
  }

  /**
    * Set binary
  **/
  public void setBinary(File binary) {
    this.binary = binary;
  }

  public FormatTest binary(File binary) {
    this.binary = binary;
    return this;
  }

 /**
   * Get date
   * @return date
  **/
  public LocalDate getDate() {
    return date;
  }

  /**
    * Set date
  **/
  public void setDate(LocalDate date) {
    this.date = date;
  }

  public FormatTest date(LocalDate date) {
    this.date = date;
    return this;
  }

 /**
   * Get dateTime
   * @return dateTime
  **/
  public OffsetDateTime getDateTime() {
    return dateTime;
  }

  /**
    * Set dateTime
  **/
  public void setDateTime(OffsetDateTime dateTime) {
    this.dateTime = dateTime;
  }

  public FormatTest dateTime(OffsetDateTime dateTime) {
    this.dateTime = dateTime;
    return this;
  }

 /**
   * Get uuid
   * @return uuid
  **/
  public UUID getUuid() {
    return uuid;
  }

  /**
    * Set uuid
  **/
  public void setUuid(UUID uuid) {
    this.uuid = uuid;
  }

  public FormatTest uuid(UUID uuid) {
    this.uuid = uuid;
    return this;
  }

 /**
   * Get password
   * @return password
  **/
  public String getPassword() {
    return password;
  }

  /**
    * Set password
  **/
  public void setPassword(String password) {
    this.password = password;
  }

  public FormatTest password(String password) {
    this.password = password;
    return this;
  }

 /**
   * A string that is a 10 digit number. Can have leading zeros.
   * @return patternWithDigits
  **/
  public String getPatternWithDigits() {
    return patternWithDigits;
  }

  /**
    * Set patternWithDigits
  **/
  public void setPatternWithDigits(String patternWithDigits) {
    this.patternWithDigits = patternWithDigits;
  }

  public FormatTest patternWithDigits(String patternWithDigits) {
    this.patternWithDigits = patternWithDigits;
    return this;
  }

 /**
   * A string starting with &#39;image_&#39; (case insensitive) and one to three digits following i.e. Image_01.
   * @return patternWithDigitsAndDelimiter
  **/
  public String getPatternWithDigitsAndDelimiter() {
    return patternWithDigitsAndDelimiter;
  }

  /**
    * Set patternWithDigitsAndDelimiter
  **/
  public void setPatternWithDigitsAndDelimiter(String patternWithDigitsAndDelimiter) {
    this.patternWithDigitsAndDelimiter = patternWithDigitsAndDelimiter;
  }

  public FormatTest patternWithDigitsAndDelimiter(String patternWithDigitsAndDelimiter) {
    this.patternWithDigitsAndDelimiter = patternWithDigitsAndDelimiter;
    return this;
  }


  /**
    * Create a string representation of this pojo.
  **/
  @Override
  public String toString() {
    StringBuilder sb = new StringBuilder();
    sb.append("class FormatTest {\n");
    
    sb.append("    integer: ").append(toIndentedString(integer)).append("\n");
    sb.append("    int32: ").append(toIndentedString(int32)).append("\n");
    sb.append("    int64: ").append(toIndentedString(int64)).append("\n");
    sb.append("    number: ").append(toIndentedString(number)).append("\n");
    sb.append("    _float: ").append(toIndentedString(_float)).append("\n");
    sb.append("    _double: ").append(toIndentedString(_double)).append("\n");
    sb.append("    decimal: ").append(toIndentedString(decimal)).append("\n");
    sb.append("    string: ").append(toIndentedString(string)).append("\n");
    sb.append("    _byte: ").append(toIndentedString(_byte)).append("\n");
    sb.append("    binary: ").append(toIndentedString(binary)).append("\n");
    sb.append("    date: ").append(toIndentedString(date)).append("\n");
    sb.append("    dateTime: ").append(toIndentedString(dateTime)).append("\n");
    sb.append("    uuid: ").append(toIndentedString(uuid)).append("\n");
    sb.append("    password: ").append(toIndentedString(password)).append("\n");
    sb.append("    patternWithDigits: ").append(toIndentedString(patternWithDigits)).append("\n");
    sb.append("    patternWithDigitsAndDelimiter: ").append(toIndentedString(patternWithDigitsAndDelimiter)).append("\n");
    sb.append("}");
    return sb.toString();
  }

  /**
   * Convert the given object to string with each line indented by 4 spaces
   * (except the first line).
   */
  private static String toIndentedString(Object o) {
    if (o == null) {
      return "null";
    }
    return o.toString().replace("\n", "\n    ");
  }
}
