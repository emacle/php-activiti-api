<?php

namespace Activiti\Client\Service;

use Activiti\Client\Model\ProcessDefinition\ProcessDefinitionList;
use Activiti\Client\Model\ProcessDefinition\ProcessDefinitionQuery;
use Activiti\Client\Model\ProcessDefinition\ProcessDefinitionUpdate;

/**
 * Interface ProcessDefinitionServiceInterface
 * @package Activiti\Client\Service
 */
interface ProcessDefinitionServiceInterface
{
    /**
     * Get ProcessDefinition list
     *
     * @see https://www.activiti.org/userguide/#_list_of_process_definitions
     *
     * @param ProcessDefinitionQuery $query
     * @return ProcessDefinitionList
     */
    public function getProcessDefinitionList(ProcessDefinitionQuery $query);

    /**
     * Get a process definition
     *
     * @see https://www.activiti.org/userguide/#_get_a_process_definition
     *
     * @param $processDefinitionId
     * @return mixed
     */
    public function getProcessDefinition($processDefinitionId);

    /**
     * Update category for a process definition
     *
     * @see https://www.activiti.org/userguide/#_update_category_for_a_process_definition
     *
     * @param $processDefinitionId
     * @param ProcessDefinitionUpdate $data
     * @return mixed
     */
    public function update($processDefinitionId, ProcessDefinitionUpdate $data);

    /**
     * Get a process definition resource content
     *
     * @see https://www.activiti.org/userguide/#_get_a_process_definition_resource_content
     *
     * @param $processDefinitionId
     * @return mixed
     */
    public function getResourceData($processDefinitionId);

    /**
     * Get a process definition image
     *
     * @param $processDefinitionId
     * @return mixed
     */
    public function getImage($processDefinitionId);

    /**
     * Suspend a process definition
     *
     * @see https://www.activiti.org/userguide/#_suspend_a_process_definition
     *
     * @param $processDefinitionId
     * @param null $includeProcessInstances
     * @param \DateTime|null $date
     * @return mixed
     */
    public function suspend($processDefinitionId, $includeProcessInstances = null, \DateTime $date = null);

    /**
     * Activate a process definition
     *
     * @see https://www.activiti.org/userguide/#_activate_a_process_definition
     *
     * @param $processDefinitionId
     * @param null $includeProcessInstances
     * @param \DateTime|null $date
     * @return mixed
     */
    public function activate($processDefinitionId, $includeProcessInstances = null, \DateTime $date = null);

    /**
     * Get all candidate starters for a process-definition
     *
     * @see https://www.activiti.org/userguide/#_get_all_candidate_starters_for_a_process_definition
     *
     * @param $processDefinitionId
     * @return mixed
     */
    public function getCandidateStarters($processDefinitionId);

    /**
     * Add a candidate starter to a process definition
     *
     * @see https://www.activiti.org/userguide/#_add_a_candidate_starter_to_a_process_definition
     *
     * @param $processDefinitionId
     * @param $userId
     * @return mixed
     */
    public function addUserCandidateStarter($processDefinitionId, $userId);

    /**
     * Add a group of candidate starter to a process definition
     *
     * @see https://www.activiti.org/userguide/#_add_a_candidate_starter_to_a_process_definition
     *
     * @param $processDefinitionId
     * @param $groupId
     * @return mixed
     */
    public function addGroupCandidateStarter($processDefinitionId, $groupId);

    /**
     * Delete a candidate starter from a process definition
     *
     * @see https://www.activiti.org/userguide/#_delete_a_candidate_starter_from_a_process_definition
     *
     * @param $processDefinitionId
     * @param $family
     * @param $identityId
     * @return mixed
     */
    public function deleteCandidateStarter($processDefinitionId, $family, $identityId);

    /**
     * Get a candidate starter from a process definition
     *
     * @see https://www.activiti.org/userguide/#_get_a_candidate_starter_from_a_process_definition
     *
     * @param $processDefinitionId
     * @param $family
     * @param $identityId
     * @return mixed
     */
    public function getCandidateStarter($processDefinitionId, $family, $identityId);
}
