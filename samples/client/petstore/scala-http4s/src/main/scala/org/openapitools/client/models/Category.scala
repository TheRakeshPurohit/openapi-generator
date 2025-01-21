/** OpenAPI Petstore
  * This is a sample server Petstore server. For this sample, you can use the api key `special-key` to test the authorization filters.
  *
  * The version of the OpenAPI document: 1.0.0
  * Contact: team@openapitools.org
  *
  * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
  * https://openapi-generator.tech
  * Do not edit the class manually.
  */
package org.openapitools.client.models

import io.circe.*
import io.circe.syntax.*
import io.circe.{Decoder, Encoder}


/** A category for a pet
  * @param id 
  * @param name 
  */
case class Category(
    id: Option[Long] = None,
    name: Option[String] = None
)
  
object Category {
  given encoderCategory: Encoder[Category] = Encoder.instance { t =>
    Json.fromFields{
      Seq(
        t.id.map(v => "id" -> v.asJson),
        t.name.map(v => "name" -> v.asJson)
      ).flatten
    }
  }
  given decoderCategory: Decoder[Category] = Decoder.instance { c =>
    for {
      id <- c.downField("id").as[Option[Long]]
      name <- c.downField("name").as[Option[String]]
    } yield Category(
      id = id,
      name = name
    )
  }
}

