<?php require 'api.php';

##################################################################################################
####################################### API Usage Examples #######################################
##################################################################################################

use ConnectWiseApi\ApiException,
    ConnectWiseApi\Configuration,
    ConnectWiseApi\Contact,
    ConnectWiseApi\Reporting,
    ConnectWiseApi\ServiceTicket;

try
{
    /**
     * Service Ticket API Examples
     */
    /*
    $test = ServiceTicket::addOrUpdateServiceTicketViaCompanyId('ConnectWise', array(
        'TicketNumber' =>  0, 'SendingSrServiceRecid' => 99, 'DateReq' => '2013-02-02', 'SubBillingMethodId' => 'None',
        'SubBillingAmount' => '100.00', 'SubDateAccepted' => '2013-01-02', 'SubDateAcceptedUtc' => '2013-01-01', 
        'BudgetHours' => '3.0', 'SkipCallback' => false, 'Approved' => false, 'ClosedFlag' => false, 'Summary' => 'This is a test (updated).',
        'Status' => 'N'
    ));
    */
    /*
    $test = ServiceTicket::addOrUpdateServiceTicketViaManagedId('VALID MANAGED ID GOES HERE', array(
        'TicketNumber' =>  0, 'SendingSrServiceRecid' => 0, 'DateReq' => '2013-02-02', 'SubBillingMethodId' => 'None',
        'SubBillingAmount' => '100.00', 'SubDateAccepted' => '2013-01-02', 'SubDateAcceptedUtc' => '2013-01-01', 
        'BudgetHours' => '3.0', 'SkipCallback' => false, 'Approved' => false, 'ClosedFlag' => false, 'Summary' => 'This is a test (updated).',
        'Status' => 'N'
    ));
    */
    /*
    $test = ServiceTicket::addOrUpdateTicketProduct(array(
        'Dropship' => false, 'SpecialOrder' => false, 'ForecastDetailId' => 0, 'TicketId' => 99, 'ProjectId' => 0, 
        'InvoiceId' => 0, 'SalesOrderId' => 0, 'Price' => 5.0, 'Cost' => 0.0, 'Quantity' => 3.00, 'ItemId' => 743, 
        'Description' => 'Test product', 'Invoice' => false, 'Taxable' => false, 'Billable' => false, 'Id' => 0,
        'OpportunityId' => 0, 'OwnerLevelRecid' => 2, 'Warehouse' => false, 'Bin' => false, 'BillingUnitRecid' => 10
    ));
    */
    /*
    $test = ServiceTicket::addServiceTicketViaCompanyId('ConnectWise', array(
        'TicketNumber' =>  100, 'SendingSrServiceRecid' => 100, 'DateReq' => '2013-02-02', 'SubBillingMethodId' => 'None',
        'SubBillingAmount' => '100.00', 'SubDateAccepted' => '2013-01-02', 'SubDateAcceptedUtc' => '2013-01-01', 
        'BudgetHours' => '3.0', 'SkipCallback' => false, 'Approved' => false, 'ClosedFlag' => false, 'Summary' => 'This is a test',
        'Status' => 'N'
    ));
    */
    /*
    $test = ServiceTicket::addTicketProduct(array(
        'Dropship' => false, 'SpecialOrder' => false, 'ForecastDetailId' => 0, 'TicketId' => 960, 'ProjectId' => 0, 
        'InvoiceId' => 0, 'SalesOrderId' => 0, 'Price' => 120.0, 'Cost' => 0.0, 'Quantity' => 2.00, 'ItemId' => 743, 
        'Description' => 'Test product', 'Invoice' => false, 'Taxable' => false, 'Billable' => false, 'Id' => 0,
        'OpportunityId' => 0, 'OwnerLevelRecid' => 2, 'Warehouse' => false, 'Bin' => false, 'BillingUnitRecid' => 10
    ));
    */

    // $test = ServiceTicket::deleteTicketProduct(83, 960);
    // $test = ServiceTicket::deleteTicketDocument(264, 387);
    // $test = ServiceTicket::getTicketDocuments(387); // doc id:  264, ticket: 387
        
    // ticket Id: 899, doc id: 266 <-- last ticket found w/ docs available
    /*
    foreach (range(874, 1000) as $num)
    {
        try 
        {
            echo $num . '<br />';

            if (count(ServiceTicket::getTicketDocuments($num)) > 0)
            {
                echo '<pre>';
                echo print_r(ServiceTicket::getTicketDocuments($num));
                echo '</pre>';
                break;
            }
        } 
        catch (Exception $error)
        {
            echo 'Error caught';
        }

        echo '<hr />';
    }
    */
    
    // $test = ServiceTicket::deleteServiceTicket(961);
    // $test = ServiceTicket::findServiceTickets(10, 0, 'Approved = false');
    // $test = ServiceTicket::getTicketProductList(960);
    // $test = ServiceTicket::getServiceStatuses(960);
    // $test = ServiceTicket::getServiceTicket(654697);
    // $test = ServiceTicket::getTicketCount(true, 'wat = "ok"');
    // $test = ServiceTicket::loadServiceTicket(960);
    // $test = ServiceTicket::searchKnowledgebase('invoice', 'All', '2000-01-01');
    // $test = ServiceTicket::searchKnowledgebaseCount('invoice', 'All', '2000-01-01');
    /*
    $test = ServiceTicket::updateServiceTicketViaCompanyId('ConnectWise', array(
        'TicketNumber' =>  960, 'SendingSrServiceRecid' => 960, 'DateReq' => '2013-02-02', 'SubBillingMethodId' => 'None',
        'SubBillingAmount' => '100.00', 'SubDateAccepted' => '2013-01-02', 'SubDateAcceptedUtc' => '2013-01-01', 
        'BudgetHours' => '3.0', 'SkipCallback' => false, 'Approved' => false, 'ClosedFlag' => false, 'Summary' => 'This is a test (updated x2).',
        'Status' => 'N'
    ));
    */  
    /*
    $test = ServiceTicket::updateTicketNote(array(
        'Id' => 1406, 'NoteType' => 'Comment', 'NoteText' => 'shoes is for shoes', 'IsFlagged' => false, 'PortalIsInternalNote' => false,
        'PortalIsExternalNote' => false, 'IsPartOfDetailDescription' => false, 'IsPartOfInternalAnalysis' => true, 
        'IsPartOfResolution' => false, 'MemberRecID' => 0, 'ContactRecID' => 0, 'DateCreated' => '2013-05-10'
    ), 5);
    */
    /*
    $test = ServiceTicket::updateTicketProduct(array(
        'Dropship' => false, 'SpecialOrder' => false, 'ForecastDetailId' => 0, 'TicketId' => 960, 'ProjectId' => 0, 
        'InvoiceId' => 0, 'SalesOrderId' => 0, 'Price' => 5.0, 'Cost' => 0.0, 'Quantity' => 3.00, 'ItemId' => 743, 
        'Description' => 'Test product EDIT SON', 'Invoice' => false, 'Taxable' => false, 'Billable' => false, 'Id' => 743,
        'OpportunityId' => 0, 'OwnerLevelRecid' => 2, 'Warehouse' => false, 'Bin' => false, 'BillingUnitRecid' => 14
    ));
    */

    // ------------------------------------------------------------------------------------    

    /**
     * Reporting API Examples
     */

    // $test = Reporting::getPortalReports(); // Need to test with credentials that have sufficient privs 
    // $test = Reporting::getReports(true);
    // $test = Reporting::getReportFields('IVCategory'); // 'IVCategory'
    // $test = Reporting::runPortalReport('report-name', 10, 0); // Need to test with a valid portal report name
    // $test = Reporting::runReportCount('IVCategory');
    // $test = Reporting::runReportQuery('sd6fs5d4f6s5df');
    
    // ------------------------------------------------------------------------------------

    /**
     * Contact API Examples
     */

    // $test = Contact::addContactToGroup(2, 20, 'testing'); // Need a valid group id 
    /*
    $test = Contact::addOrUpdateContact(array(
        'FirstName' => 'LTWebDevGuyTEST23', 'LastName' => 'Testerino', 'ContactRecID' => 0, 'Id' => 0,
        'BirthDay' => '0001-01-01T00:00:00', 'Married' => false, 'CompanyId' => 'ConnectWise',
        'Children' => false, 'Anniversary' => '0001-01-01T00:00:00', 'PortalSecurityLevel' => 6,
        'DisablePortalLogin' => false, 'Inactive' => false,
        'UnsubscribeFlag' => false, 'LastUpdate' => '2011-06-30T09:35:27.113', 'PersonalAddressFlag' => false,
        'Gender' => 'Male', 'Email' => 'dontemailmebrozz@domain.com'
    ));
    */

    /*
    Contact::addOrUpdateContactCommunicationItem(248, array(
        'Id' => 0, 'Type' => 'PhoneNumber', 'CommunicationTypeId' => 2, 'Description' => 'Cell'
    ));
    */
    // $test = Contact::getContactCommunicationItem(2, 'PhoneNumber', 'Direct');
    // $test = Contact::getAllContactCommunicationItems(248);
    // $test = Contact::setDefaultContactCommunicationItem(248, 'PhoneNumber', 'Direct');
    // $test = Contact::deleteContactCommunicationItem(248, 'PhoneNumber', 'Home');

    /*
    Contact::addOrUpdateContactNote(248, array(
        'Id' => 0, 'NoteType' => 'Comment', 'NoteText' => 'iRack bro 22', 'IsFlagged' => false
    ));
    */
    
    // $test = Contact::getContact(123248);
    // $test = Contact::getAvatarImage(2);
    // $test = Contact::getAllContactNotes(248);
    // $test = Contact::findCompanies(5, 0, 'Id');
    // $test = Contact::findContacts(20, 0, 'Id');
    // $test = Contact::findContactsCount('FirstName = "LTWebDevGuy"');
    // $test = Contact::getAllCommunicationTypesAndDescriptions();
    // $test = Contact::getContactNote(2, 12);
    // $test = Contact::getPortalConfigSettings('Default');
    // $test = Contact::getPortalLoginCustomizations('Default');
    // $test = Contact::getPortalSecurity(1, 'Wrong Co');
    // $test = Contact::loadContact(2);
    // $test = Contact::removeContactFromGroup(201, 20, 'test'); // Need a valid group id
    // $test = Contact::requestPassword('dontemailmebro@domain.com');
    
    // $test = Contact::deleteNote(46, 248);
    
    // $test = Contact::deleteContact(240);

    // ------------------------------------------------------------------------------------

    /**
     * Configuration API Examples
     */
    
    /*
    $test = Configuration::addConfiguration(array(
        'Id' => 676, 'ConfigurationTypeId' => 11, 'ConfigurationType' => 'License', 'StatusId' => 1, 'ConfigurationName' => 'PSA Software Test sdf21'
    ));
    */
    /*
    $test = Configuration::addConfigurationType(array(
        'Id' => 99, 'Name' => 'Test Config Type', 'InactiveFlag' => false, 'SystemFlag' => true
    ));
    */
    /*
    $test = Configuration::addOrUpdateConfiguration(array(
        'Id' => 557, 'ConfigurationTypeId' => 11, 'StatusId' => 0, 
        'ConfigurationName' => 'PSA Software Test 02 Updatedson'
    ));
    */
    /*
    $test = Configuration::addOrUpdateConfigurationType(array(
        'Id' => 25, 'Name' => 'Test Config Type', 'InactiveFlag' => false, 'SystemFlag' => true
    ));
    */
    // $test = Configuration::getConfiguration(99);
    // $test = Configuration::loadConfiguration(557);
    // $test = Configuration::getConfigurationType(26);
    // $test = Configuration::loadConfigurationType(26);
    // $test = Configuration::findConfigurations(10, 0, 'StatusId = 1', 'Id');
    // $test = Configuration::findConfigurationTypes(1, 0, 'SystemFlag = false', 'Id');
    // $test = Configuration::findConfigurationsCount();
    /*
    $test = Configuration::updateConfiguration(array(
        'Id' => 556, 'ConfigurationTypeId' => 11, 'StatusId' => 0, 
        'ConfigurationName' => 'LT Devs Test Config Edited'
    ));
    */
    /*
    $test = Configuration::updateConfigurationType(array(
        'Id' => 26, 'Name' => 'Test Config Type', 'InactiveFlag' => false, 'SystemFlag' => true,
        'ConfigurationTypeQuestions' => array('ConfigurationTypeQuestion' => array(
            'Id' => 100, 'FieldType' => 'Currency', 'EntryType' => 'Option',
            'ConfigurationTypeId' => 0, 'SequenceNumber' => 1, 'Question' => 'Wat',
            'RequiredFlag' => true, 'InactiveFlag' => false, 'PossibleResponses' => array(
                'Id' => 100, 'ConfigurationTypeQuestionId' => 100, 'Value' => 'huh', 'DefaultFlag' => false
            )
        ))
    ));
    */
    // $test = Configuration::deleteConfiguration(99);
    // $test = Configuration::deleteConfigurationType(25);
    // $test = Configuration::deleteConfigurationTypeQuestion(99);
    // $test = Configuration::deletePossibleResponse(50);

    // ------------------------------------------------------------------------------------

    // Print test results -- use var_dump() to see boolean values, etc
    echo '<pre>';
    echo print_r($test);
    echo '</pre>';
}
catch (Exception $error)
{
    echo '<strong>'.get_class($error).' Exception Caught</strong>';
    echo '<hr />';
    echo $error->getMessage();
}