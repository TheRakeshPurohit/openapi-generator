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
 * OuterEnum.h
 *
 * 
 */

#ifndef OuterEnum_H_
#define OuterEnum_H_



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
class  OuterEnum 
{
public:
    OuterEnum() = default;
    explicit OuterEnum(boost::property_tree::ptree const& pt);
    virtual ~OuterEnum() = default;

    OuterEnum(const OuterEnum& other) = default; // copy constructor
    OuterEnum(OuterEnum&& other) noexcept = default; // move constructor

    OuterEnum& operator=(const OuterEnum& other) = default; // copy assignment
    OuterEnum& operator=(OuterEnum&& other) noexcept = default; // move assignment

    std::string toJsonString(bool prettyJson = false) const;
    void fromJsonString(std::string const& jsonString);
    boost::property_tree::ptree toPropertyTree() const;
    void fromPropertyTree(boost::property_tree::ptree const& pt);

    std::string toString() const;
    void fromString(const std::string& str);

    /////////////////////////////////////////////
    /// OuterEnum members
    std::string getEnumValue() const;
    void setEnumValue(const std::string& val);

protected:
    std::string m_OuterEnumEnumValue;
};

std::vector<OuterEnum> createOuterEnumVectorFromJsonString(const std::string& json);

template<>
inline boost::property_tree::ptree toPt<OuterEnum>(const OuterEnum& val) {
    return val.toPropertyTree();
}

template<>
inline OuterEnum fromPt<OuterEnum>(const boost::property_tree::ptree& pt) {
    OuterEnum ret;
    ret.fromPropertyTree(pt);
    return ret;
}

}
}
}
}

#endif /* OuterEnum_H_ */
