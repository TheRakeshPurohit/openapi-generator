// <auto-generated>
/*
 * OpenAPI Petstore
 *
 * This spec is mainly for testing Petstore server and contains fake endpoints, models. Please do not use this for any other purpose. Special characters: \" \\
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://github.com/openapitools/openapi-generator.git
 */

#nullable enable

using System;
using System.Collections;
using System.Collections.Generic;
using System.Collections.ObjectModel;
using System.Linq;
using System.IO;
using System.Text;
using System.Text.RegularExpressions;
using System.Text.Json;
using System.Text.Json.Serialization;
using System.ComponentModel.DataAnnotations;
using OpenAPIClientUtils = Org.OpenAPITools.Client.ClientUtils;

namespace Org.OpenAPITools.Model
{
    /// <summary>
    /// TestInlineFreeformAdditionalPropertiesRequest
    /// </summary>
    public partial class TestInlineFreeformAdditionalPropertiesRequest : Dictionary<String, Object>, IValidatableObject
    {
        /// <summary>
        /// Initializes a new instance of the <see cref="TestInlineFreeformAdditionalPropertiesRequest" /> class.
        /// </summary>
        /// <param name="someProperty">someProperty</param>
        [JsonConstructor]
        public TestInlineFreeformAdditionalPropertiesRequest(string someProperty) : base()
        {
            SomeProperty = someProperty;
            OnCreated();
        }

        partial void OnCreated();

        /// <summary>
        /// Gets or Sets SomeProperty
        /// </summary>
        [JsonPropertyName("someProperty")]
        public string SomeProperty { get; set; }

        /// <summary>
        /// Gets or Sets additional properties
        /// </summary>
        [JsonExtensionData]
        public Dictionary<string, JsonElement> AdditionalProperties { get; } = new Dictionary<string, JsonElement>();

        /// <summary>
        /// Returns the string presentation of the object
        /// </summary>
        /// <returns>String presentation of the object</returns>
        public override string ToString()
        {
            StringBuilder sb = new StringBuilder();
            sb.Append("class TestInlineFreeformAdditionalPropertiesRequest {\n");
            sb.Append("  ").Append(base.ToString()?.Replace("\n", "\n  ")).Append("\n");
            sb.Append("  SomeProperty: ").Append(SomeProperty).Append("\n");
            sb.Append("  AdditionalProperties: ").Append(AdditionalProperties).Append("\n");
            sb.Append("}\n");
            return sb.ToString();
        }

        /// <summary>
        /// To validate all properties of the instance
        /// </summary>
        /// <param name="validationContext">Validation context</param>
        /// <returns>Validation Result</returns>
        IEnumerable<System.ComponentModel.DataAnnotations.ValidationResult> IValidatableObject.Validate(ValidationContext validationContext)
        {
            return this.BaseValidate(validationContext);
        }

        /// <summary>
        /// To validate all properties of the instance
        /// </summary>
        /// <param name="validationContext">Validation context</param>
        /// <returns>Validation Result</returns>
        protected IEnumerable<System.ComponentModel.DataAnnotations.ValidationResult> BaseValidate(ValidationContext validationContext)
        {
            yield break;
        }
    }

    /// <summary>
    /// A Json converter for type <see cref="TestInlineFreeformAdditionalPropertiesRequest" />
    /// </summary>
    public class TestInlineFreeformAdditionalPropertiesRequestJsonConverter : JsonConverter<TestInlineFreeformAdditionalPropertiesRequest>
    {
        /// <summary>
        /// Deserializes json to <see cref="TestInlineFreeformAdditionalPropertiesRequest" />
        /// </summary>
        /// <param name="utf8JsonReader"></param>
        /// <param name="typeToConvert"></param>
        /// <param name="jsonSerializerOptions"></param>
        /// <returns></returns>
        /// <exception cref="JsonException"></exception>
        public override TestInlineFreeformAdditionalPropertiesRequest Read(ref Utf8JsonReader utf8JsonReader, Type typeToConvert, JsonSerializerOptions jsonSerializerOptions)
        {
            int currentDepth = utf8JsonReader.CurrentDepth;

            if (utf8JsonReader.TokenType != JsonTokenType.StartObject && utf8JsonReader.TokenType != JsonTokenType.StartArray)
                throw new JsonException();

            JsonTokenType startingTokenType = utf8JsonReader.TokenType;

            string? someProperty = default;

            while (utf8JsonReader.Read())
            {
                if (startingTokenType == JsonTokenType.StartObject && utf8JsonReader.TokenType == JsonTokenType.EndObject && currentDepth == utf8JsonReader.CurrentDepth)
                    break;

                if (startingTokenType == JsonTokenType.StartArray && utf8JsonReader.TokenType == JsonTokenType.EndArray && currentDepth == utf8JsonReader.CurrentDepth)
                    break;

                if (utf8JsonReader.TokenType == JsonTokenType.PropertyName && currentDepth == utf8JsonReader.CurrentDepth - 1)
                {
                    string? localVarJsonPropertyName = utf8JsonReader.GetString();
                    utf8JsonReader.Read();

                    switch (localVarJsonPropertyName)
                    {
                        case "someProperty":
                            someProperty = utf8JsonReader.GetString();
                            break;
                        default:
                            break;
                    }
                }
            }

            if (someProperty == null)
                throw new ArgumentNullException(nameof(someProperty), "Property is required for class TestInlineFreeformAdditionalPropertiesRequest.");

            return new TestInlineFreeformAdditionalPropertiesRequest(someProperty);
        }

        /// <summary>
        /// Serializes a <see cref="TestInlineFreeformAdditionalPropertiesRequest" />
        /// </summary>
        /// <param name="writer"></param>
        /// <param name="testInlineFreeformAdditionalPropertiesRequest"></param>
        /// <param name="jsonSerializerOptions"></param>
        /// <exception cref="NotImplementedException"></exception>
        public override void Write(Utf8JsonWriter writer, TestInlineFreeformAdditionalPropertiesRequest testInlineFreeformAdditionalPropertiesRequest, JsonSerializerOptions jsonSerializerOptions)
        {
            writer.WriteStartObject();

            WriteProperties(ref writer, testInlineFreeformAdditionalPropertiesRequest, jsonSerializerOptions);
            writer.WriteEndObject();
        }

        /// <summary>
        /// Serializes the properties of <see cref="TestInlineFreeformAdditionalPropertiesRequest" />
        /// </summary>
        /// <param name="writer"></param>
        /// <param name="testInlineFreeformAdditionalPropertiesRequest"></param>
        /// <param name="jsonSerializerOptions"></param>
        /// <exception cref="NotImplementedException"></exception>
        public void WriteProperties(ref Utf8JsonWriter writer, TestInlineFreeformAdditionalPropertiesRequest testInlineFreeformAdditionalPropertiesRequest, JsonSerializerOptions jsonSerializerOptions)
        {
            writer.WriteString("someProperty", testInlineFreeformAdditionalPropertiesRequest.SomeProperty);
        }
    }
}