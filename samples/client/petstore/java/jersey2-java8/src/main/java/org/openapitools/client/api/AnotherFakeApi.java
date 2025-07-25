package org.openapitools.client.api;

import org.openapitools.client.ApiException;
import org.openapitools.client.ApiClient;
import org.openapitools.client.ApiResponse;
import org.openapitools.client.Configuration;
import org.openapitools.client.Pair;

import javax.ws.rs.core.GenericType;

import org.openapitools.client.model.Client;
import java.util.UUID;

import java.util.ArrayList;
import java.util.HashMap;
import java.util.LinkedHashMap;
import java.util.List;
import java.util.Map;

@javax.annotation.Generated(value = "org.openapitools.codegen.languages.JavaClientCodegen", comments = "Generator version: 7.15.0-SNAPSHOT")
public class AnotherFakeApi {
  private ApiClient apiClient;

  public AnotherFakeApi() {
    this(Configuration.getDefaultApiClient());
  }

  public AnotherFakeApi(ApiClient apiClient) {
    this.apiClient = apiClient;
  }

  /**
   * Get the API client
   *
   * @return API client
   */
  public ApiClient getApiClient() {
    return apiClient;
  }

  /**
   * Set the API client
   *
   * @param apiClient an instance of API client
   */
  public void setApiClient(ApiClient apiClient) {
    this.apiClient = apiClient;
  }

  /**
   * To test special tags
   * To test special tags and operation ID starting with number
   * @param uuidTest to test uuid example value (required)
   * @param body client model (required)
   * @return Client
   * @throws ApiException if fails to make API call
   * @http.response.details
     <table border="1">
       <caption>Response Details</caption>
       <tr><td> Status Code </td><td> Description </td><td> Response Headers </td></tr>
       <tr><td> 200 </td><td> successful operation </td><td>  -  </td></tr>
     </table>
   */
  public Client call123testSpecialTags(@javax.annotation.Nonnull UUID uuidTest, @javax.annotation.Nonnull Client body) throws ApiException {
    return call123testSpecialTagsWithHttpInfo(uuidTest, body).getData();
  }

  /**
   * To test special tags
   * To test special tags and operation ID starting with number
   * @param uuidTest to test uuid example value (required)
   * @param body client model (required)
   * @return ApiResponse&lt;Client&gt;
   * @throws ApiException if fails to make API call
   * @http.response.details
     <table border="1">
       <caption>Response Details</caption>
       <tr><td> Status Code </td><td> Description </td><td> Response Headers </td></tr>
       <tr><td> 200 </td><td> successful operation </td><td>  -  </td></tr>
     </table>
   */
  public ApiResponse<Client> call123testSpecialTagsWithHttpInfo(@javax.annotation.Nonnull UUID uuidTest, @javax.annotation.Nonnull Client body) throws ApiException {
    // Check required parameters
    if (uuidTest == null) {
      throw new ApiException(400, "Missing the required parameter 'uuidTest' when calling call123testSpecialTags");
    }
    if (body == null) {
      throw new ApiException(400, "Missing the required parameter 'body' when calling call123testSpecialTags");
    }

    // Header parameters
    Map<String, String> localVarHeaderParams = new LinkedHashMap<>();
    localVarHeaderParams.put("uuid_test", apiClient.parameterToString(uuidTest));

    String localVarAccept = apiClient.selectHeaderAccept("application/json");
    String localVarContentType = apiClient.selectHeaderContentType("application/json");
    GenericType<Client> localVarReturnType = new GenericType<Client>() {};
    return apiClient.invokeAPI("AnotherFakeApi.call123testSpecialTags", "/another-fake/dummy", "PATCH", new ArrayList<>(), body,
                               localVarHeaderParams, new LinkedHashMap<>(), new LinkedHashMap<>(), localVarAccept, localVarContentType,
                               null, localVarReturnType, false);
  }
}
