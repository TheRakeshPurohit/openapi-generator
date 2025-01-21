/**
 * OpenAPI Petstore
 * This spec is mainly for testing Petstore server and contains fake endpoints, models. Please do not use this for any other purpose. Special characters: \" \\
 *
 * The version of the OpenAPI document: 1.0.0
 * 
 *
 * NOTE: This class is auto generated by OpenAPI-Generator 7.12.0-SNAPSHOT.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

/*
 * OuterEnumInteger.h
 *
 * 
 */

#ifndef OuterEnumInteger_H_
#define OuterEnumInteger_H_



#include <memory>
#include <vector>
#include <boost/property_tree/ptree.hpp>
#include "helpers.h"

namespace org {
namespace openapitools {
namespace server {
namespace model {

/// <summary>
/// 
/// </summary>
class  OuterEnumInteger 
{
public:
    OuterEnumInteger() = default;
    explicit OuterEnumInteger(boost::property_tree::ptree const& pt);
    virtual ~OuterEnumInteger() = default;

    OuterEnumInteger(const OuterEnumInteger& other) = default; // copy constructor
    OuterEnumInteger(OuterEnumInteger&& other) noexcept = default; // move constructor

    OuterEnumInteger& operator=(const OuterEnumInteger& other) = default; // copy assignment
    OuterEnumInteger& operator=(OuterEnumInteger&& other) noexcept = default; // move assignment

    std::string toJsonString(bool prettyJson = false) const;
    void fromJsonString(std::string const& jsonString);
    boost::property_tree::ptree toPropertyTree() const;
    void fromPropertyTree(boost::property_tree::ptree const& pt);

    std::string toString() const;
    void fromString(const std::string& str);

    /////////////////////////////////////////////
    /// OuterEnumInteger members
    int32_t getEnumValue() const;
    void setEnumValue(const int32_t& val);

protected:
    int32_t m_OuterEnumIntegerEnumValue;
};

std::vector<OuterEnumInteger> createOuterEnumIntegerVectorFromJsonString(const std::string& json);

template<>
inline boost::property_tree::ptree toPt<OuterEnumInteger>(const OuterEnumInteger& val) {
    return val.toPropertyTree();
}

template<>
inline OuterEnumInteger fromPt<OuterEnumInteger>(const boost::property_tree::ptree& pt) {
    OuterEnumInteger ret;
    ret.fromPropertyTree(pt);
    return ret;
}

}
}
}
}

#endif /* OuterEnumInteger_H_ */
