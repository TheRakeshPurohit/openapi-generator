package org.openapitools.model;

import java.net.URI;
import java.util.Objects;
import com.fasterxml.jackson.annotation.JsonIgnoreProperties;
import com.fasterxml.jackson.annotation.JsonProperty;
import com.fasterxml.jackson.annotation.JsonCreator;
import com.fasterxml.jackson.annotation.JsonSubTypes;
import com.fasterxml.jackson.annotation.JsonTypeInfo;
import org.springframework.lang.Nullable;
import org.openapitools.jackson.nullable.JsonNullable;
import java.time.OffsetDateTime;
import javax.validation.Valid;
import javax.validation.constraints.*;
import io.swagger.v3.oas.annotations.media.Schema;


import java.util.*;
import javax.annotation.Generated;

/**
 * Entity reference schema to be use for all entityRef class.
 */

@Schema(name = "EntityRef", description = "Entity reference schema to be use for all entityRef class.")
@JsonIgnoreProperties(
  value = "@type", // ignore manually set @type, it will be automatically generated by Jackson during serialization
  allowSetters = true // allows the @type to be set during deserialization
)
@JsonTypeInfo(use = JsonTypeInfo.Id.NAME, include = JsonTypeInfo.As.PROPERTY, property = "@type", visible = true)
@JsonSubTypes({
  @JsonSubTypes.Type(value = BarRef.class, name = "BarRef"),
  @JsonSubTypes.Type(value = FooRef.class, name = "FooRef")
})

@Generated(value = "org.openapitools.codegen.languages.SpringCodegen", comments = "Generator version: 7.12.0-SNAPSHOT")
public class EntityRef {

  private @Nullable String name;

  private @Nullable String atReferredType;

  private @Nullable String href;

  private @Nullable String id;

  private @Nullable String atSchemaLocation;

  private @Nullable String atBaseType;

  private String atType;

  public EntityRef() {
    super();
  }

  /**
   * Constructor with only required parameters
   */
  public EntityRef(String atType) {
    this.atType = atType;
  }

  public EntityRef name(String name) {
    this.name = name;
    return this;
  }

  /**
   * Name of the related entity.
   * @return name
   */
  
  @Schema(name = "name", description = "Name of the related entity.", requiredMode = Schema.RequiredMode.NOT_REQUIRED)
  @JsonProperty("name")
  public String getName() {
    return name;
  }

  public void setName(String name) {
    this.name = name;
  }

  public EntityRef atReferredType(String atReferredType) {
    this.atReferredType = atReferredType;
    return this;
  }

  /**
   * The actual type of the target instance when needed for disambiguation.
   * @return atReferredType
   */
  
  @Schema(name = "@referredType", description = "The actual type of the target instance when needed for disambiguation.", requiredMode = Schema.RequiredMode.NOT_REQUIRED)
  @JsonProperty("@referredType")
  public String getAtReferredType() {
    return atReferredType;
  }

  public void setAtReferredType(String atReferredType) {
    this.atReferredType = atReferredType;
  }

  public EntityRef href(String href) {
    this.href = href;
    return this;
  }

  /**
   * Hyperlink reference
   * @return href
   */
  
  @Schema(name = "href", description = "Hyperlink reference", requiredMode = Schema.RequiredMode.NOT_REQUIRED)
  @JsonProperty("href")
  public String getHref() {
    return href;
  }

  public void setHref(String href) {
    this.href = href;
  }

  public EntityRef id(String id) {
    this.id = id;
    return this;
  }

  /**
   * unique identifier
   * @return id
   */
  
  @Schema(name = "id", description = "unique identifier", requiredMode = Schema.RequiredMode.NOT_REQUIRED)
  @JsonProperty("id")
  public String getId() {
    return id;
  }

  public void setId(String id) {
    this.id = id;
  }

  public EntityRef atSchemaLocation(String atSchemaLocation) {
    this.atSchemaLocation = atSchemaLocation;
    return this;
  }

  /**
   * A URI to a JSON-Schema file that defines additional attributes and relationships
   * @return atSchemaLocation
   */
  
  @Schema(name = "@schemaLocation", description = "A URI to a JSON-Schema file that defines additional attributes and relationships", requiredMode = Schema.RequiredMode.NOT_REQUIRED)
  @JsonProperty("@schemaLocation")
  public String getAtSchemaLocation() {
    return atSchemaLocation;
  }

  public void setAtSchemaLocation(String atSchemaLocation) {
    this.atSchemaLocation = atSchemaLocation;
  }

  public EntityRef atBaseType(String atBaseType) {
    this.atBaseType = atBaseType;
    return this;
  }

  /**
   * When sub-classing, this defines the super-class
   * @return atBaseType
   */
  
  @Schema(name = "@baseType", description = "When sub-classing, this defines the super-class", requiredMode = Schema.RequiredMode.NOT_REQUIRED)
  @JsonProperty("@baseType")
  public String getAtBaseType() {
    return atBaseType;
  }

  public void setAtBaseType(String atBaseType) {
    this.atBaseType = atBaseType;
  }

  public EntityRef atType(String atType) {
    this.atType = atType;
    return this;
  }

  /**
   * When sub-classing, this defines the sub-class Extensible name
   * @return atType
   */
  @NotNull 
  @Schema(name = "@type", description = "When sub-classing, this defines the sub-class Extensible name", requiredMode = Schema.RequiredMode.REQUIRED)
  @JsonProperty("@type")
  public String getAtType() {
    return atType;
  }

  public void setAtType(String atType) {
    this.atType = atType;
  }

  @Override
  public boolean equals(Object o) {
    if (this == o) {
      return true;
    }
    if (o == null || getClass() != o.getClass()) {
      return false;
    }
    EntityRef entityRef = (EntityRef) o;
    return Objects.equals(this.name, entityRef.name) &&
        Objects.equals(this.atReferredType, entityRef.atReferredType) &&
        Objects.equals(this.href, entityRef.href) &&
        Objects.equals(this.id, entityRef.id) &&
        Objects.equals(this.atSchemaLocation, entityRef.atSchemaLocation) &&
        Objects.equals(this.atBaseType, entityRef.atBaseType) &&
        Objects.equals(this.atType, entityRef.atType);
  }

  @Override
  public int hashCode() {
    return Objects.hash(name, atReferredType, href, id, atSchemaLocation, atBaseType, atType);
  }

  @Override
  public String toString() {
    StringBuilder sb = new StringBuilder();
    sb.append("class EntityRef {\n");
    sb.append("    name: ").append(toIndentedString(name)).append("\n");
    sb.append("    atReferredType: ").append(toIndentedString(atReferredType)).append("\n");
    sb.append("    href: ").append(toIndentedString(href)).append("\n");
    sb.append("    id: ").append(toIndentedString(id)).append("\n");
    sb.append("    atSchemaLocation: ").append(toIndentedString(atSchemaLocation)).append("\n");
    sb.append("    atBaseType: ").append(toIndentedString(atBaseType)).append("\n");
    sb.append("    atType: ").append(toIndentedString(atType)).append("\n");
    sb.append("}");
    return sb.toString();
  }

  /**
   * Convert the given object to string with each line indented by 4 spaces
   * (except the first line).
   */
  private String toIndentedString(Object o) {
    if (o == null) {
      return "null";
    }
    return o.toString().replace("\n", "\n    ");
  }
  
  public static class Builder {

    private EntityRef instance;

    public Builder() {
      this(new EntityRef());
    }

    protected Builder(EntityRef instance) {
      this.instance = instance;
    }

    protected Builder copyOf(EntityRef value) { 
      this.instance.setName(value.name);
      this.instance.setAtReferredType(value.atReferredType);
      this.instance.setHref(value.href);
      this.instance.setId(value.id);
      this.instance.setAtSchemaLocation(value.atSchemaLocation);
      this.instance.setAtBaseType(value.atBaseType);
      this.instance.setAtType(value.atType);
      return this;
    }

    public EntityRef.Builder name(String name) {
      this.instance.name(name);
      return this;
    }
    
    public EntityRef.Builder atReferredType(String atReferredType) {
      this.instance.atReferredType(atReferredType);
      return this;
    }
    
    public EntityRef.Builder href(String href) {
      this.instance.href(href);
      return this;
    }
    
    public EntityRef.Builder id(String id) {
      this.instance.id(id);
      return this;
    }
    
    public EntityRef.Builder atSchemaLocation(String atSchemaLocation) {
      this.instance.atSchemaLocation(atSchemaLocation);
      return this;
    }
    
    public EntityRef.Builder atBaseType(String atBaseType) {
      this.instance.atBaseType(atBaseType);
      return this;
    }
    
    public EntityRef.Builder atType(String atType) {
      this.instance.atType(atType);
      return this;
    }
    
    /**
    * returns a built EntityRef instance.
    *
    * The builder is not reusable (NullPointerException)
    */
    public EntityRef build() {
      try {
        return this.instance;
      } finally {
        // ensure that this.instance is not reused
        this.instance = null;
      }
    }

    @Override
    public String toString() {
      return getClass() + "=(" + instance + ")";
    }
  }

  /**
  * Create a builder with no initialized field (except for the default values).
  */
  public static EntityRef.Builder builder() {
    return new EntityRef.Builder();
  }

  /**
  * Create a builder with a shallow copy of this instance.
  */
  public EntityRef.Builder toBuilder() {
    EntityRef.Builder builder = new EntityRef.Builder();
    return builder.copyOf(this);
  }

}

