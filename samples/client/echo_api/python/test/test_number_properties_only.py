# coding: utf-8

"""
    Echo Server API

    Echo Server API

    The version of the OpenAPI document: 0.1.0
    Contact: team@openapitools.org
    Generated by OpenAPI Generator (https://openapi-generator.tech)

    Do not edit the class manually.
"""  # noqa: E501


import unittest

from openapi_client.models.number_properties_only import NumberPropertiesOnly

class TestNumberPropertiesOnly(unittest.TestCase):
    """NumberPropertiesOnly unit test stubs"""

    def setUp(self):
        pass

    def tearDown(self):
        pass

    def make_instance(self, include_optional) -> NumberPropertiesOnly:
        """Test NumberPropertiesOnly
            include_optional is a boolean, when False only required
            params are included, when True both required and
            optional params are included """
        # uncomment below to create an instance of `NumberPropertiesOnly`
        """
        model = NumberPropertiesOnly()
        if include_optional:
            return NumberPropertiesOnly(
                number = 1.337,
                var_float = 1.337,
                double = 0.8
            )
        else:
            return NumberPropertiesOnly(
        )
        """

    def testNumberPropertiesOnly(self):
        """Test NumberPropertiesOnly"""
        # inst_req_only = self.make_instance(include_optional=False)
        # inst_req_and_optional = self.make_instance(include_optional=True)

if __name__ == '__main__':
    unittest.main()
