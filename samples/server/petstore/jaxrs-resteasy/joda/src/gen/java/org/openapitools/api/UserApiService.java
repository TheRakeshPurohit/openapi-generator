package org.openapitools.api;

import org.openapitools.api.*;
import org.openapitools.model.*;


import org.joda.time.DateTime;
import org.openapitools.model.User;

import java.util.List;
import org.openapitools.api.NotFoundException;

import java.io.InputStream;

import javax.validation.constraints.*;
import javax.validation.Valid;
import javax.ws.rs.core.Response;
import javax.ws.rs.core.SecurityContext;

@javax.annotation.Generated(value = "org.openapitools.codegen.languages.JavaResteasyServerCodegen", comments = "Generator version: 7.15.0-SNAPSHOT")
public interface UserApiService {
      Response createUser(User body,SecurityContext securityContext)
      throws NotFoundException;
      Response createUsersWithArrayInput(List<@Valid User> body,SecurityContext securityContext)
      throws NotFoundException;
      Response createUsersWithListInput(List<@Valid User> body,SecurityContext securityContext)
      throws NotFoundException;
      Response deleteUser(String username,SecurityContext securityContext)
      throws NotFoundException;
      Response getUserByName(String username,SecurityContext securityContext)
      throws NotFoundException;
      Response loginUser(String username,String password,SecurityContext securityContext)
      throws NotFoundException;
      Response logoutUser(SecurityContext securityContext)
      throws NotFoundException;
      Response updateUser(String username,User body,SecurityContext securityContext)
      throws NotFoundException;
}
