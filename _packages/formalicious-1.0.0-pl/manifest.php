<?php return array (
  'manifest-version' => '1.1',
  'manifest-attributes' => 
  array (
    'license' => 'Formalicious is proprietary software, developed by Sterc and distributed through modmore.com. By purchasing Formalicious via https://www.modmore.com/formalicious/, you have received a usage license for a single (1) MODX Revolution installation, including one year (starting on date of purchase) of email support.

While we hope Formalicious is useful to you and we will try to help you successfully use Formalicious, modmore or Sterc is not liable for loss of revenue, data, damages or other financial loss resulting from the installation or use of Formalicious.

By using and installing this package, you acknowledge that you shall only use this on a single MODX installation.

Redistribution in any shape or form is strictly prohibited. You may customize or change the provided source code to tailor Formalicious for your own use, as long as no attempt is made to remove license protection measures. By changing source code you acknowledge you void the right to support unless coordinated with modmore support.
',
    'readme' => '--------------------
Formalicious
--------------------
Author: Sterc <modx@sterc.nl>
--------------------

Formalicious is the most powerful and easiest MODX form builder, with built-in multi-step forms, 8 field types, validation and the ability to use hooks and other advanced FormIt features.
',
    'changelog' => '++ Formalicious 1.0.0-pl
++ Released on February 1st, 2017
++++++++++++++++++++++++++
- XS-4 New documentation
- XS-11 Changed height of several dialog windows
- XS-12 Spacing adjustments
- XS-19 Gave the default emails a lighter grey
- XS-20 Modified all en/nl lexicons
- XS-21 Fixed inline editing (removed it)

++ Formalicious 1.0.0-RC2
++ Released on January 27th, 2017
++++++++++++++++++++++++++
- #28: Fixed oldstyle actions
- #29: Improved this very changelog
- #40: Create a readme
- #41: New logo for the modmore site!
- #XS-42: Autoheight for new-field dialog

++ Formalicious 1.0.0-RC1
++ Released on January 26th, 2017
++++++++++++++++++++++++++
- #34: Improved handling of empty fields
- #37: Radio button + Select + Checkbox options are now required
- #38: Allowed files are now mentioned
- #36: Improved default emails
- #32: Unused description field is now removed
- #31: Improved placeholder field usage
- #30: Mention context-NAME in the "Redirect to" field when creating a new form
- #27: Fixed file upload in multistep form
- #22: Improved emailTpl
- #20 + #23 + #35: Improved styling of buttons
- #17: Fixed category_id fallback
- #9 + #12: Fixed empty fields in multistep form
- #13: Fixed email validation
- #10: Fixed adding parameters not working properly
- #7: Now shipped with TV
- #8: Fixed uninstallation proces
- #4: "Update type" dialog is now bigger
- #2: Fixed select form-email-field when creating a form
- #1: Fixed empty field when creating a form
- #6: Improved adding fields
- #5: Improved step-creation flow
- #3: Replaced form-description with "Email header text"

++ Formalicious 0.6.0
++ Released in 2016
++++++++++++++++++++++++++
- Create form categories
- Ability to create form steps
- Ability to save forms in FormIt (FormIt V2.2.2+) CMP
- Added ability to setup autoresponder in form
- Updated lexicons',
    'requires' => 
    array (
      'formit' => '>=2.2.2',
    ),
  ),
  'manifest-vehicles' => 
  array (
    0 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modNamespace',
      'guid' => '7998c4e6c524113b6b5f3e6b3b668dc8',
      'native_key' => 'formalicious',
      'filename' => 'modNamespace/d4ddb674d19ff2ee5b39074f2fdc6144.vehicle',
      'namespace' => 'formalicious',
    ),
    1 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '80c461a5b9f0f57a20daeb3cfd886767',
      'native_key' => 'formalicious.source',
      'filename' => 'modSystemSetting/3634f4626262f333b7b79b2688dae2a3.vehicle',
      'namespace' => 'formalicious',
    ),
    2 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modCategory',
      'guid' => 'bcc0df736ddc0b257e74d53c6418865d',
      'native_key' => NULL,
      'filename' => 'modCategory/1225bf85b429a6c6e5fc8d36e3c3c433.vehicle',
      'namespace' => 'formalicious',
    ),
    3 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modMenu',
      'guid' => 'faf10ede319ec4562e3318f51411bf3d',
      'native_key' => 'formalicious',
      'filename' => 'modMenu/688add0e85a198cf677b305cb14973aa.vehicle',
      'namespace' => 'formalicious',
    ),
  ),
);