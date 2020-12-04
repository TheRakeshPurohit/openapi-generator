/* tslint:disable */
/* eslint-disable */
/**
 * OpenAPI Petstore
 * This is a sample server Petstore server. For this sample, you can use the api key `special-key` to test the authorization filters.
 *
 * The version of the OpenAPI document: 1.0.0
 * 
 *
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


import {Api} from './';
import {List} from 'immutable';
import {all, fork, put, takeLatest} from "redux-saga/effects";
import {apiCall, createSagaAction as originalCreateSagaAction, BasePayloadApiAction, NormalizedRecordEntities, normalizedEntities} from "../runtimeSagasAndRecords";
import {Action} from "redux-ts-simple";

import {
    Category,
    CategoryRecord,
    categoryRecordUtils,
    FindPetsByStatusResponse,
    FindPetsByStatusResponseRecord,
    findPetsByStatusResponseRecordUtils,
    ModelApiResponse,
    ModelApiResponseRecord,
    modelApiResponseRecordUtils,
    Pet,
    PetRecord,
    petRecordUtils,
} from '../models';


import {
    FindPetsByStatusStatusEnum,
} from './PetApi';


const createSagaAction = <T>(type: string) => originalCreateSagaAction<T>(type, {namespace: "api_petApi"});

export const petApiSagaMap = new Map<string, () => Generator<any, any, any>>([
    	["addPet", addPetSaga],
    	["deletePet", deletePetSaga],
    	["findPetsByIds", findPetsByIdsSaga],
    	["findPetsByStatus", findPetsByStatusSaga],
    	["findPetsByTags", findPetsByTagsSaga],
    	["getPetById", getPetByIdSaga],
    	["updatePet", updatePetSaga],
    	["updatePetWithForm", updatePetWithFormSaga],
    	["uploadFile", uploadFileSaga],
	]
);

export function *petApiAllSagas() {
	yield all([...petApiSagaMap.values()].map(actionSaga => fork(actionSaga)));
}

//region addPet

export interface PayloadAddPet extends PayloadAddPetRequest {
}

export interface PayloadAddPetRequest {
    dummyCat: CategoryRecord;
}

export const addPetRequest = createSagaAction<PayloadAddPetRequest>("addPetRequest");
export const addPetSuccess = createSagaAction<void>("addPetSuccess");
export const addPetFailure = createSagaAction<any>("addPetFailure");

export const addPet = createSagaAction<PayloadAddPet>("addPet");

export function *addPetSaga() {
	yield takeLatest(addPet, addPetSagaImp);
}

export function *addPetSagaImp(_action_: Action<PayloadAddPet>) {
	try {
        const {
            dummyCat,
   		} = _action_.payload;

		yield put(addPetRequest(_action_.payload));

		const response = yield apiCall(Api.petApi, Api.petApi.addPet,
            categoryRecordUtils.toApi(dummyCat),
		);

		    yield put(addPetSuccess());

        return undefined;
	} catch (error) {
		yield put(addPetFailure(error));
		return error;
	}
}
//endregion
//region deletePet

export interface PayloadDeletePet extends PayloadDeletePetRequest {
}

export interface PayloadDeletePetRequest {
    petId: string;
    apiKey?: string;
}

export const deletePetRequest = createSagaAction<PayloadDeletePetRequest>("deletePetRequest");
export const deletePetSuccess = createSagaAction<void>("deletePetSuccess");
export const deletePetFailure = createSagaAction<any>("deletePetFailure");

export const deletePet = createSagaAction<PayloadDeletePet>("deletePet");

export function *deletePetSaga() {
	yield takeLatest(deletePet, deletePetSagaImp);
}

export function *deletePetSagaImp(_action_: Action<PayloadDeletePet>) {
	try {
        const {
            petId,
            apiKey,
   		} = _action_.payload;

		yield put(deletePetRequest(_action_.payload));

		const response = yield apiCall(Api.petApi, Api.petApi.deletePet,
            parseFloat(petId),
            apiKey,
		);

		    yield put(deletePetSuccess());

        return undefined;
	} catch (error) {
		yield put(deletePetFailure(error));
		return error;
	}
}
//endregion
//region findPetsByIds

export interface PayloadFindPetsByIds extends PayloadFindPetsByIdsRequest, BasePayloadApiAction {
}

export interface PayloadFindPetsByIdsRequest {
    ids: List<string>;
}

export const findPetsByIdsRequest = createSagaAction<PayloadFindPetsByIdsRequest>("findPetsByIdsRequest");
export const findPetsByIdsSuccess = createSagaAction<List<PetRecord>>("findPetsByIdsSuccess");
export const findPetsByIdsSuccess_Entities = createSagaAction<NormalizedRecordEntities>("findPetsByIdsSuccess_Entities");
export const findPetsByIdsFailure = createSagaAction<any>("findPetsByIdsFailure");

export const findPetsByIds = createSagaAction<PayloadFindPetsByIds>("findPetsByIds");

export function *findPetsByIdsSaga() {
	yield takeLatest(findPetsByIds, findPetsByIdsSagaImp);
}

export function *findPetsByIdsSagaImp(_action_: Action<PayloadFindPetsByIds>) {
	try {
		const {toEntities, toInlined = !toEntities, ...requestPayload} = _action_.payload;
        const {
            ids,
   		} = _action_.payload;

		yield put(findPetsByIdsRequest(requestPayload));

		const response: Required<Array<Pet>> = yield apiCall(Api.petApi, Api.petApi.findPetsByIds,
            ids.map(p => parseFloat(p)).toArray(),
		);

		let successReturnValue: any = undefined;
		if (toEntities) {
            successReturnValue = petRecordUtils.fromApiArrayAsEntities(response);
			yield put(normalizedEntities(successReturnValue));
			yield put(findPetsByIdsSuccess_Entities(successReturnValue));
		}
		if (toInlined) {
            successReturnValue = petRecordUtils.fromApiArray(response);
	    	yield put(findPetsByIdsSuccess(successReturnValue));
		}

        return successReturnValue;
	} catch (error) {
		yield put(findPetsByIdsFailure(error));
		return error;
	}
}
//endregion
//region findPetsByStatus

export interface PayloadFindPetsByStatus extends PayloadFindPetsByStatusRequest, BasePayloadApiAction {
}

export interface PayloadFindPetsByStatusRequest {
    status: List<FindPetsByStatusStatusEnum>;
}

export const findPetsByStatusRequest = createSagaAction<PayloadFindPetsByStatusRequest>("findPetsByStatusRequest");
export const findPetsByStatusSuccess = createSagaAction<List<PetRecord>>("findPetsByStatusSuccess");
export const findPetsByStatusSuccess_Entities = createSagaAction<NormalizedRecordEntities>("findPetsByStatusSuccess_Entities");
export const findPetsByStatusFailure = createSagaAction<any>("findPetsByStatusFailure");

export const findPetsByStatus = createSagaAction<PayloadFindPetsByStatus>("findPetsByStatus");

export function *findPetsByStatusSaga() {
	yield takeLatest(findPetsByStatus, findPetsByStatusSagaImp);
}

export function *findPetsByStatusSagaImp(_action_: Action<PayloadFindPetsByStatus>) {
	try {
		const {toEntities, toInlined = !toEntities, ...requestPayload} = _action_.payload;
        const {
            status,
   		} = _action_.payload;

		yield put(findPetsByStatusRequest(requestPayload));

		const response: Required<FindPetsByStatusResponse> = yield apiCall(Api.petApi, Api.petApi.findPetsByStatus,
            status.toJS(),
		);

		let successReturnValue: any = undefined;
		if (toEntities) {
			successReturnValue = findPetsByStatusResponseRecordUtils.fromApiPassthroughAsEntities(response);
			yield put(normalizedEntities(successReturnValue));
			yield put(findPetsByStatusSuccess_Entities(successReturnValue));
		}
		if (toInlined) {
    		successReturnValue = findPetsByStatusResponseRecordUtils.fromApiPassthrough(response);
	    	yield put(findPetsByStatusSuccess(successReturnValue));
		}

		return successReturnValue;
	} catch (error) {
		yield put(findPetsByStatusFailure(error));
		return error;
	}
}
//endregion
//region findPetsByTags

export interface PayloadFindPetsByTags extends PayloadFindPetsByTagsRequest, BasePayloadApiAction {
}

export interface PayloadFindPetsByTagsRequest {
    tags: List<string>;
}

export const findPetsByTagsRequest = createSagaAction<PayloadFindPetsByTagsRequest>("findPetsByTagsRequest");
export const findPetsByTagsSuccess = createSagaAction<List<PetRecord>>("findPetsByTagsSuccess");
export const findPetsByTagsSuccess_Entities = createSagaAction<NormalizedRecordEntities>("findPetsByTagsSuccess_Entities");
export const findPetsByTagsFailure = createSagaAction<any>("findPetsByTagsFailure");

export const findPetsByTags = createSagaAction<PayloadFindPetsByTags>("findPetsByTags");

export function *findPetsByTagsSaga() {
	yield takeLatest(findPetsByTags, findPetsByTagsSagaImp);
}

export function *findPetsByTagsSagaImp(_action_: Action<PayloadFindPetsByTags>) {
	try {
		const {toEntities, toInlined = !toEntities, ...requestPayload} = _action_.payload;
        const {
            tags,
   		} = _action_.payload;

		yield put(findPetsByTagsRequest(requestPayload));

		const response: Required<Array<Pet>> = yield apiCall(Api.petApi, Api.petApi.findPetsByTags,
            tags.toJS(),
		);

		let successReturnValue: any = undefined;
		if (toEntities) {
            successReturnValue = petRecordUtils.fromApiArrayAsEntities(response);
			yield put(normalizedEntities(successReturnValue));
			yield put(findPetsByTagsSuccess_Entities(successReturnValue));
		}
		if (toInlined) {
            successReturnValue = petRecordUtils.fromApiArray(response);
	    	yield put(findPetsByTagsSuccess(successReturnValue));
		}

        return successReturnValue;
	} catch (error) {
		yield put(findPetsByTagsFailure(error));
		return error;
	}
}
//endregion
//region getPetById

export interface PayloadGetPetById extends PayloadGetPetByIdRequest, BasePayloadApiAction {
}

export interface PayloadGetPetByIdRequest {
    petId: string;
}

export const getPetByIdRequest = createSagaAction<PayloadGetPetByIdRequest>("getPetByIdRequest");
export const getPetByIdSuccess = createSagaAction<PetRecord>("getPetByIdSuccess");
export const getPetByIdSuccess_Entities = createSagaAction<NormalizedRecordEntities>("getPetByIdSuccess_Entities");
export const getPetByIdFailure = createSagaAction<any>("getPetByIdFailure");

export const getPetById = createSagaAction<PayloadGetPetById>("getPetById");

export function *getPetByIdSaga() {
	yield takeLatest(getPetById, getPetByIdSagaImp);
}

export function *getPetByIdSagaImp(_action_: Action<PayloadGetPetById>) {
	try {
		const {toEntities, toInlined = !toEntities, ...requestPayload} = _action_.payload;
        const {
            petId,
   		} = _action_.payload;

		yield put(getPetByIdRequest(requestPayload));

		const response: Required<Pet> = yield apiCall(Api.petApi, Api.petApi.getPetById,
            parseFloat(petId),
		);

		let successReturnValue: any = undefined;
		if (toEntities) {
            successReturnValue = petRecordUtils.fromApiArrayAsEntities([response]);
			yield put(normalizedEntities(successReturnValue));
			yield put(getPetByIdSuccess_Entities(successReturnValue));
		}
		if (toInlined) {
            successReturnValue = petRecordUtils.fromApi(response);
		    yield put(getPetByIdSuccess(successReturnValue));
		}

        return successReturnValue;
	} catch (error) {
		yield put(getPetByIdFailure(error));
		return error;
	}
}
//endregion
//region updatePet

export interface PayloadUpdatePet extends PayloadUpdatePetRequest {
}

export interface PayloadUpdatePetRequest {
    body: PetRecord;
}

export const updatePetRequest = createSagaAction<PayloadUpdatePetRequest>("updatePetRequest");
export const updatePetSuccess = createSagaAction<void>("updatePetSuccess");
export const updatePetFailure = createSagaAction<any>("updatePetFailure");

export const updatePet = createSagaAction<PayloadUpdatePet>("updatePet");

export function *updatePetSaga() {
	yield takeLatest(updatePet, updatePetSagaImp);
}

export function *updatePetSagaImp(_action_: Action<PayloadUpdatePet>) {
	try {
        const {
            body,
   		} = _action_.payload;

		yield put(updatePetRequest(_action_.payload));

		const response = yield apiCall(Api.petApi, Api.petApi.updatePet,
            petRecordUtils.toApi(body),
		);

		    yield put(updatePetSuccess());

        return undefined;
	} catch (error) {
		yield put(updatePetFailure(error));
		return error;
	}
}
//endregion
//region updatePetWithForm

export interface PayloadUpdatePetWithForm extends PayloadUpdatePetWithFormRequest {
}

export interface PayloadUpdatePetWithFormRequest {
    petId: string;
    name?: string;
    status?: string;
}

export const updatePetWithFormRequest = createSagaAction<PayloadUpdatePetWithFormRequest>("updatePetWithFormRequest");
export const updatePetWithFormSuccess = createSagaAction<void>("updatePetWithFormSuccess");
export const updatePetWithFormFailure = createSagaAction<any>("updatePetWithFormFailure");

export const updatePetWithForm = createSagaAction<PayloadUpdatePetWithForm>("updatePetWithForm");

export function *updatePetWithFormSaga() {
	yield takeLatest(updatePetWithForm, updatePetWithFormSagaImp);
}

export function *updatePetWithFormSagaImp(_action_: Action<PayloadUpdatePetWithForm>) {
	try {
        const {
            petId,
            name,
            status,
   		} = _action_.payload;

		yield put(updatePetWithFormRequest(_action_.payload));

		const response = yield apiCall(Api.petApi, Api.petApi.updatePetWithForm,
            parseFloat(petId),
            name,
            status,
		);

		    yield put(updatePetWithFormSuccess());

        return undefined;
	} catch (error) {
		yield put(updatePetWithFormFailure(error));
		return error;
	}
}
//endregion
//region uploadFile

export interface PayloadUploadFile extends PayloadUploadFileRequest, BasePayloadApiAction {
}

export interface PayloadUploadFileRequest {
    petId: string;
    additionalMetadata?: string;
    file?: Blob;
}

export const uploadFileRequest = createSagaAction<PayloadUploadFileRequest>("uploadFileRequest");
export const uploadFileSuccess = createSagaAction<ModelApiResponseRecord>("uploadFileSuccess");
export const uploadFileSuccess_Entities = createSagaAction<NormalizedRecordEntities>("uploadFileSuccess_Entities");
export const uploadFileFailure = createSagaAction<any>("uploadFileFailure");

export const uploadFile = createSagaAction<PayloadUploadFile>("uploadFile");

export function *uploadFileSaga() {
	yield takeLatest(uploadFile, uploadFileSagaImp);
}

export function *uploadFileSagaImp(_action_: Action<PayloadUploadFile>) {
	try {
		const {toEntities, toInlined = !toEntities, ...requestPayload} = _action_.payload;
        const {
            petId,
            additionalMetadata,
            file,
   		} = _action_.payload;

		yield put(uploadFileRequest(requestPayload));

		const response: Required<ModelApiResponse> = yield apiCall(Api.petApi, Api.petApi.uploadFile,
            parseFloat(petId),
            additionalMetadata,
            file,
		);

		let successReturnValue: any = undefined;
		if (toEntities) {
            successReturnValue = modelApiResponseRecordUtils.fromApiArrayAsEntities([response]);
			yield put(normalizedEntities(successReturnValue));
			yield put(uploadFileSuccess_Entities(successReturnValue));
		}
		if (toInlined) {
            successReturnValue = modelApiResponseRecordUtils.fromApi(response);
		    yield put(uploadFileSuccess(successReturnValue));
		}

        return successReturnValue;
	} catch (error) {
		yield put(uploadFileFailure(error));
		return error;
	}
}
//endregion
