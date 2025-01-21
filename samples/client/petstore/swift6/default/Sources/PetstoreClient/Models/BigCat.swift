//
// BigCat.swift
//
// Generated by openapi-generator
// https://openapi-generator.tech
//

import Foundation

public struct BigCat: Sendable, Codable, JSONEncodable, Hashable {

    public enum Kind: String, Sendable, Codable, CaseIterable {
        case lions = "lions"
        case tigers = "tigers"
        case leopards = "leopards"
        case jaguars = "jaguars"
    }
    public var kind: Kind?

    public init(kind: Kind? = nil) {
        self.kind = kind
    }

    public enum CodingKeys: String, CodingKey, CaseIterable {
        case kind
    }

    // Encodable protocol methods

    public func encode(to encoder: Encoder) throws {
        var container = encoder.container(keyedBy: CodingKeys.self)
        try container.encodeIfPresent(kind, forKey: .kind)
    }
}

