<?php /**
 * Created by PhpStorm.
 * User: Jose
 * Date: 25/08/2016
 * Time: 11:24
 */
echo 'Tabela Person';
echo '<pre>';
print_r($person);
echo '</pre>';
echo 'Tabela User';
echo '<pre>';
print_r($user);
echo '</pre>';
echo 'Tabela Person acessando tabela user';
echo '<pre>';
print_r($person_user);
echo '</pre>';
echo 'Tabela Historic';
echo '<pre>';
print_r($historic);
echo '</pre>';
echo 'Tabela User acessando Historic';
echo '<pre>';
print_r($user_historic);
echo '</pre>';
echo 'Tabela Visitor';
echo '<pre>';
print_r($visitor);
echo '</pre>';
echo 'Tabela Visitor atraves de Person';
echo '<pre>';
print_r($visitor_person);
echo '</pre>';
echo 'Tabela DateVisit';
echo '<pre>';
print_r($datevisit);
echo '</pre>';
echo 'Tabela DateVisit atraves de Visitor';
echo '<pre>';
print_r($datevisit_visitor);
echo '</pre>';
echo 'Tabela PhoneToPerson';
echo '<pre>';
print_r($phone_to_person);
echo '</pre>';
echo 'Tabela Phone';
echo '<pre>';
print_r($phone);
echo '</pre>';
echo 'AuthorizationSearch';
echo '<pre>';
print_r($authorizationsearch);
echo '</pre>';
echo 'AuthorizationSearch atraves de User';
echo '<pre>';
print_r($authorizationsearch_user);
echo '</pre>';
echo 'Tabela Members';
echo '<pre>';
print_r($members);
echo '</pre>';
echo 'Tabela Members via Authorization';
echo '<pre>';
print_r($members);
echo '</pre>';
echo 'Tabela Activities of information';
echo '<pre>';
print_r($activities);
echo '</pre>';
echo 'Tabela MemberToAuthorizationResearch';
echo '<pre>';
print_r($membertoauthorizationresearch);
echo '</pre>';

?>