=begin
#Echo Server API

#Echo Server API

The version of the OpenAPI document: 0.1.0
Contact: team@openapitools.org
Generated by: https://openapi-generator.tech
Generator version: 7.11.0-SNAPSHOT

=end

require 'spec_helper'
require 'json'
require 'date'

# Unit tests for OpenapiClient::Query
# Automatically generated by openapi-generator (https://openapi-generator.tech)
# Please update as you see appropriate
describe OpenapiClient::Query do
  let(:instance) { OpenapiClient::Query.new }

  describe 'test an instance of Query' do
    it 'should create an instance of Query' do
      # uncomment below to test the instance creation
      #expect(instance).to be_instance_of(OpenapiClient::Query)
    end
  end

  describe 'test attribute "id"' do
    it 'should work' do
      # assertion here. ref: https://rspec.info/features/3-12/rspec-expectations/built-in-matchers/
    end
  end

  describe 'test attribute "outcomes"' do
    it 'should work' do
      # assertion here. ref: https://rspec.info/features/3-12/rspec-expectations/built-in-matchers/
      # validator = Petstore::EnumTest::EnumAttributeValidator.new('Array<String>', ["SUCCESS", "FAILURE", "SKIPPED"])
      # validator.allowable_values.each do |value|
      #   expect { instance.outcomes = value }.not_to raise_error
      # end
    end
  end

end
