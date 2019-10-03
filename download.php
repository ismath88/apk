<?php
$PNG_TEMP_DIR = dirname(__FILE__).DIRECTORY_SEPARATOR.'temp'.DIRECTORY_SEPARATOR;
$file = $PNG_TEMP_DIR."form 2.doc";

header('Content-Description: File Transfer');
header('Content-Disposition: attachment; filename='.basename($file));
header('Content-Type:application/msword');
header('Content-Transfer-Encoding: binary');
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Length: ' . filesize($file));
readfile($file);

$form = <<<EOD
<table cellpadding="2" cellspacing="0" border="0">
                                            <tr>
                                                <td >
                                                    <label  for="nameofhusband">1.
                                                        Name of husband:
                                                    </label>
                                                </td>
                                                <td >
                                                    <input name="nameofhusband" type="text"  id="nameofhusband" size="20">
                                                </td>

                                            </tr>
                                            <tr>
                                                <td >
                                                    <label  for="husband_nricno">
                                                        &nbsp &nbsp  NRIC No:
                                                    </label>
                                                </td>
                                                <td >
                                                    <input name="husband_nricno" type="text"  id="husband_nricno" size="20">

                                                </td>

                                            </tr>
                                            <tr>
                                                <td>
                                                    <label for="nameofwife" >&nbsp &nbsp  Name of wife:</label>
                                                </td>
                                                <td>
                                                    <input name="nameofwife" type="text"  id="nameofwife" size="20">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td >
                                                    <label  for="wife_nricno">
                                                        &nbsp &nbsp  NRIC No:
                                                    </label>
                                                </td>
                                                <td >
                                                    <input name="wife_nricno" type="text"  id="wife_nricno" size="20">

                                                </td>

                                            </tr>

                                            <tr>
                                                <td>
                                                    <label  for="address_residence" >2.
                                                        Type of House  Address <br/>&nbsp &nbsp (Residence):
                                                    </label>
                                                </td>
                                                <td>
                                                    <textarea rows="5"  name="address_residence"   style="width:175px;margin-left:1px"></textarea>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td >
                                                    <label  for="house_telno">&nbsp &nbsp Tel No:
                                                    </label>
                                                </td>
                                                <td >
                                                    <input name="house_telno" type="text"  id="house_telno" size="20">

                                                </td>

                                            </tr>
                                            <tr>
                                                <td>
                                                    <label  for="husb_ofc_address" >3.
                                                        Husband (Office)<br/>&nbsp &nbsp Name and Address:
                                                    </label>
                                                </td>
                                                <td>
                                                    <textarea rows="5"  name="husb_ofc_address"   style="width:175px;margin-left:1px"></textarea>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td >
                                                    <label  for="husb_ofc_telno">&nbsp &nbsp Tel No:
                                                    </label>
                                                </td>
                                                <td >
                                                    <input name="husb_ofc_telno" type="text"  id="husb_ofc_telno" size="20">

                                                </td>

                                            </tr>
                                            <tr>
                                                <td>
                                                    <label  for="wife_ofc_address" >4.
                                                        Wife (Office) <br/>&nbsp &nbsp Name and Address:
                                                    </label>
                                                </td>
                                                <td>
                                                    <textarea rows="5"  name="wife_ofc_address"   style="width:175px;margin-left:1px"></textarea>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td >
                                                    <label  for="wife_ofc_telno">&nbsp &nbsp Tel No:
                                                    </label>
                                                </td>
                                                <td >
                                                    <input name="wife_ofc_telno" type="text"  id="wife_ofc_telno" size="20">

                                                </td>

                                            </tr>
                                            <tr>
                                                <td><label  for="income_husband">5.
                                                        Monthly Income
                                                    </label></td>
                                            </tr>
                                            <tr>
                                                <td >
                                                    <label  for="income_husband">
                                                        &nbsp &nbsp Husband:
                                                    </label>
                                                </td>
                                                <td >
                                                    <input name="income_husband" type="text"  id="nameofhusband" size="20">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td >
                                                    <label  for="income_wife">
                                                        &nbsp &nbsp Wife:
                                                    </label>
                                                </td>
                                                <td >
                                                    <input name="income_wife" type="text"  id="income_wife" size="20">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label  for="occp_husband">6.
                                                        Occupation/Profession
                                                    </label></td>
                                            </tr>
                                            <tr>
                                                <td >
                                                    <label  for="occp_husband">
                                                        &nbsp &nbsp Husband:
                                                    </label>
                                                </td>
                                                <td >
                                                    <input name="occp_husband" type="text"  id="occp_husband" size="20">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td >
                                                    <label  for="occp_wife">
                                                        &nbsp &nbsp Wife:
                                                    </label>
                                                </td>
                                                <td >
                                                    <input name="occp_wife" type="text"  id="occp_wife" size="20">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label for="num_child">7.
                                                        Number Of Children:</label>
                                                </td>
                                                <td>
                                                    <input name="num_child" type="text" id="num_child" size="20">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label for="type_of_maid">8.
                                                        Type of maid Preferred:</label>
                                                </td>
                                                <td>
                                                    <select name="type_of_maid" id="type_of_maid">
                                                        <option value="0">-Choose-</option>
                                                        <option>Sri Lanka</option>
                                                        <option>Indonesia</option>
                                                        <option>Cambodia</option>
                                                        <option>Philippines</option>
                                                    </select>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <label for="age">&nbsp &nbsp Age preferred:</label>
                                                </td>
                                                <td>
                                                    <input name="age" type="text" id="age" size="20">

                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label for="yes_no">9.
                                                        Have you applied for a maid before?:</label>
                                                </td>
                                                <td>
                                                    <select name="yes_no" id="yes_no">
                                                        <option value="01">-Choose-</option>
                                                        <option>Yes</option>
                                                        <option>No</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label for="file_no">&nbsp &nbsp If yes, File No:</label>
                                                </td>
                                                <td>
                                                    <input name="file_no" type="text" id="file_no" size="20">

                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label for="name_of_maid">&nbsp &nbsp Name Of Maid:</label>
                                                </td>
                                                <td>
                                                    <input name="name_of_maid" type="text" id="name_of_maid" size="20">

                                                </td>
                                            </tr>

                                            <tr>
                                                <td colspan="2">
                                                    <br/>
                                                    <center><input name="submit" type="submit"  value="Submit"></center>
                                                </td>
                                            </tr>
                                        </table>

EOD;

echo $form;
exit;
?>
