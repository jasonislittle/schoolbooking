<?php

/* Status messages */

$lang['AUTH_FAIL_USERPASS'] = 'Incorrect username and/or password';
$lang['AUTH_OK'] = 'You are now logged in.';

$lang['AUTH_LOGOUT_OK'] = 'You have been successfully logged out.';
$lang['AUTH_LOGOUT_FAIL'] = 'Your logout request was unsuccessful. Please close all browser windows to ensure your session is closed properly.';

$lang['AUTH_CHECK_NO_PID'] = 'Could not locate privilege ID for requested action (%s)';
$lang['AUTH_MUST_LOGIN'] = 'You are required to login to access this section.';
$lang['AUTH_NO_PRIVS'] = 'You do not have the correct privileges to access this section.';

$lang['CONF_MAIN_SAVE_OK'] = 'Main settings were saved successfully.';
$lang['CONF_AUTH_SAVE_OK'] = 'Authentication settings were saved successfully.';
$lang['CONF_AUTH_SAVE_FAIL'] = 'An error occured while saving the authentication settings.';

$lang['CONF_AUTH_LDAP_SAVE_OK'] = 'LDAP settings were saved successfully.';
$lang['CONF_AUTH_LDAP_SAVE_FAIL'] = 'An error occured while saving the LDAP settings.';

$lang['CONF_AUTH_PREAUTH_SAVE_OK'] = 'Pre-authentication settings were saved successfully.';
$lang['CONF_AUTH_PREAUTH_SAVE_FAIL'] = 'An error occured while saving the pre-authentication settings.';
$lang['CONF_AUTH_PREAUTH_NEWKEY'] = 'A new pre-authentication key has been created. Remember to update any applications that use it.';

$lang['SECURITY_USER_ADD_OK_ENABLED'] = 'The user was created successfully and can now log in using the password you set.';
$lang['SECURITY_USER_ADD_OK_DISABLED'] = 'The user was created successfully, but they will not be able to log in until their account is enabled.';
$lang['SECURITY_USER_ADD_FAIL'] = 'An error occured and the user could not be added (%s)';

$lang['SECURITY_USER_EDIT_OK_ENABLED'] = 'The user details were saved successfully.';
$lang['SECURITY_USER_EDIT_OK_DISABLED'] = 'The user details were saved successfully, but they will not be able to log in until you enable their account.';
$lang['SECURITY_USER_ADD_FAIL'] = 'An error occured and the user details could not be saved (%s)';

$lang['SECURITY_GROUP_ADD_OK'] = 'The %s group was created successfully.';
$lang['SECURITY_GROUP_ADD_FAIL'] = 'An error occured and the group could not be added (%s).';
$lang['SECURITY_GROUP_EDIT_OK'] = 'The %s group details were saved successfully.';
$lang['SECURITY_GROUP_EDIT_FAIL'] = 'An error occured and the group details could not be saved (%s).';

$lang['DEPARTMENTS_ADD_OK'] = 'The %s department was added successfully.';
$lang['DEPARTMENTS_ADD_FAIL'] = 'An error occured and the department could not be added (%s).';
$lang['DEPARTMENTS_EDIT_OK'] = 'The %s department details were saved successfully.';
$lang['DEPARTMENTS_EDIT_FAIL'] = 'An error occured and the department details could not be saved (%s).';

$lang['PERIODS_ADD_OK'] = 'The period was added successfully.';
$lang['PERIODS_ADD_FAIL'] = 'An error occured and the period could not be added.';
$lang['PERIODS_EDIT_OK'] = 'The period details were saved successfully.';
$lang['PERIODS_EDIT_FAIL'] = 'An error occured and the period details could not be saved.';

$lang['TIMESLOTS_OK'] = 'The time slots have been updated.';
$lang['TIMESLOTS_FAIL'] = 'An error occurred and the time slots have not been updated (%s).';

$lang['WEEKS_ADD_OK'] = '%s was added successfully.';
$lang['WEEKS_ADD_FAIL'] = 'An error occured and the week could not be added (%s).';
$lang['WEEKS_EDIT_OK'] = 'The %s details were saved successfully.';
$lang['WEEKS_EDIT_FAIL'] = 'An error occured and the week details could not be saved (%s).';

$lang['YEARS_ADD_OK'] = 'The academic year %s was added successfully.';
$lang['YEARS_ADD_FAIL'] = 'An error occured and the academic year (%s) could not be added.';
$lang['YEARS_EDIT_OK'] = 'The %s academic year details were saved successfully.';
$lang['YEARS_EDIT_FAIL'] = 'An error occured and the academic year (%s) details could not be saved.';
$lang['YEARS_ACTIVATE_OK'] = 'The academic year has been made active.';
$lang['YEARS_ACTIVATE_FAIL'] = 'An error occured and the academic year could not be made active.';
$lang['YEARS_ACTIVATE_NOID'] = 'You must supply a year ID to make it active.';

$lang['ROOMS_ADD_OK'] = 'The room was added successfully';
$lang['ROOMS_ADD_FAIL'] = 'An error occured and the room could not be added (%s).';
$lang['ROOMS_EDIT_OK'] = 'The room details were saved successfully.';
$lang['ROOMS_EDIT_FAIL'] = 'An error occured and the room details could not be saved (%s).';

$lang['ROOMS_PERMS_ADD_OK'] = 'The room permission entry was added successfully.';
$lang['ROOMS_PERMS_ADD_FAIL'] = 'An error occured and the room permission entry could not be added.';

$lang['ROOMS_ATTRVALS_SAVE_OK'] = 'The room attributes were saved successfully.';
$lang['ROOMS_ATTRVALS_SAVE_FAIL'] = 'An error occured and the room attributes could not be saves (%s).';

$lang['FIELDS_ADD_OK'] = 'The field was added successfully.';
$lang['FIELDS_ADD_FAIL'] = 'An error occured and the field could not be added (%s).';
$lang['FIELDS_EDIT_OK'] = 'The field details were saved successfully';
$lang['FIELDS_EDIT_FAIL'] = 'An error occured and the field details could not be saved (%s).';

// Misc
$lang['PERMISSIONS_EFFECTIVE_USER_FAIL'] = 'Could not find the given user, or no user ID supplied.';
$lang['FORM_ERRORS'] = 'Please check the following invalid item(s) and try again.';
$lang['ADD_ANOTHER'] = 'and add another';

// Words
$lang['W_PERIOD'] = 'Period';
$lang['W_PERIODS'] = 'Periods';
$lang['W_DEPARTMENT'] = 'Department';
$lang['W_DEPARTMENTS'] = 'Departments';
$lang['W_WEEK'] = 'Week';
$lang['W_WEEKS'] = 'Weeks';
$lang['W_YEAR'] = 'Year';
$lang['W_YEARS'] = 'Years';
$lang['W_FIELD'] = 'Field';
$lang['W_SCHOOL'] = 'School';
$lang['W_NAME'] = 'Name';
$lang['W_DETAILS'] = 'Details';
$lang['W_SETTINGS'] = 'Settings';

// Login/out terminology
$lang['LOGIN'] = 'Log in';		// Could be 'Sign in'...
$lang['LOGOUT'] = 'Log out';		// Could be 'Sign out'...

$lang['USERNAME'] = 'Username';
$lang['PASSWORD'] = 'Password';

// Modules
$lang['DASHBOARD'] = 'Dashboard';
$lang['BOOKINGS'] = 'Bookings';

$lang['CONFIGURE'] = 'Configure';
$lang['WEBADDR'] = 'web address';

$lang['REPORTS'] = 'Reports';

$lang['GENERAL_SETTINGS'] = 'General settings';
$lang['AUTHENTICATION'] = 'Authentication';
$lang['USERS'] = 'Users';
$lang['GROUPS'] = 'Groups';
$lang['PERMISSIONS'] = 'Roles &amp; Permissions';
$lang['DEPARTMENTS'] = 'Departments';
$lang['ROOMS'] = 'Rooms';
$lang['ACADEMIC_YEARS'] = 'Academic years';
$lang['TERM_DATES'] = 'Term dates';
$lang['TIMETABLE_WEEKS'] = 'Timetable weeks';
$lang['HOLIDAYS'] = 'Holidays';
$lang['PERIODS'] = 'Periods';

// Actions
$lang['ACTION_ADD'] = 'Add';
$lang['ACTION_NEW'] = 'New';
$lang['ACTION_SAVE'] = 'Save';
$lang['ACTION_DELETE'] = 'Delete';
$lang['ACTION_CANCEL'] = 'Cancel';




// Permissions

$lang['permsection_bookings'] = 'Bookings';
$lang['permsection_crbs'] = 'Main system';
$lang['permsection_departments'] = 'Departments';
$lang['permsection_groups'] = 'User groups';
$lang['permsection_users'] = 'User accounts';
$lang['permsection_permissions'] = 'Permissions and Roles';
$lang['permsection_holidays'] = 'School holidays';
$lang['permsection_years'] = 'Academic years';
$lang['permsection_terms'] = 'Term dates';
$lang['permsection_weeks'] = 'Timetable weeks';
$lang['permsection_rooms'] = 'Rooms';
$lang['permsection_periods'] = 'Periods';
$lang['permsection_reports'] = 'Reports';



$lang['permission_bookings.create.one'] = 'Create a one-time booking';
$lang['permission_bookings.create.proxy'] = 'Create bookings on behalf of other people';
$lang['permission_bookings.create.recur'] = 'Create timetabled recurring bookings';
$lang['permission_bookings.delete.one.own'] = 'Delete their own one-time bookings';
$lang['permission_bookings.delete.one.recur'] = 'Delete their own timetable recurring bookings';
$lang['permission_bookings.delete.recur.roomowner'] = 'Delete recurring bookings in their own room';
$lang['permission_bookings.view'] = 'View the bookings page';

$lang['permission_crbs.account.changepwd'] = 'Change password';
$lang['permission_crbs.account.view'] = 'View account page';
$lang['permission_crbs.configure'] = 'View the configure section';
$lang['permission_crbs.dashboard.view'] = 'View dashboard';
$lang['permission_crbs.dashboard.viewdept'] = 'Dashboard - show department information';
$lang['permission_crbs.dashboard.viewown'] = 'Dashboard - show own information';
$lang['permission_crbs.rooms.exempt'] = 'Exempt from specific room permissions';
$lang['permission_crbs.year.change'] = 'Change the working academic year';

$lang['permission_departments.add'] = 'Add a new department';
$lang['permission_departments.delete'] = 'Delete a department';
$lang['permission_departments.edit'] = 'Edit department details';
$lang['permission_departments.view'] = 'View departments';

$lang['permission_groups.add'] = 'Add a new group';
$lang['permission_groups.delete'] = 'Delete a group';
$lang['permission_groups.edit'] = 'Edit group details';
$lang['permission_groups.view'] = 'View groups';

$lang['permission_holidays.add'] = 'Add a holiday';
$lang['permission_holidays.delete'] = 'Delete a holiday';
$lang['permission_holidays.edit'] = 'Edit holiday details';
$lang['permission_holidays.view'] = 'View holidays';

$lang['permission_periods.add'] = 'Add a period';
$lang['permission_periods.delete'] = 'Delete a period';
$lang['permission_periods.edit'] = 'Edit period details';
$lang['permission_periods.view'] = 'View periods';

$lang['permission_permissions.view'] = 'Configure permissions';

$lang['permission_reports.view'] = 'View reports section';
$lang['permission_reports.view.all'] = 'Access to all reports';
$lang['permission_reports.view.department.all'] = 'View all departmental reports';
$lang['permission_reports.view.department.own'] = 'View own department reports';
$lang['permission_reports.view.room.all'] = 'View all room reports';
$lang['permission_reports.view.room.own'] = 'View own room reports';

// booking permissions for individual rooms
$lang['permission_room.booking.create.one'] = 'Create a single booking in this room';
$lang['permission_room.booking.create.one.proxy'] = 'Create a single booking on behalf of another person';
$lang['permission_room.booking.create.recur'] = 'Create a timetabled recurring booking';
$lang['permission_room.booking.create.recur.proxy'] = 'Create a timetabled recurring booking on behalf of another person';
$lang['permission_room.view'] = 'View this room';

$lang['permission_rooms.add'] = 'Add a new room';
$lang['permission_rooms.attrs'] = 'Configure room attributes';
$lang['permission_rooms.delete'] = 'Delete a room';
$lang['permission_rooms.edit'] = 'Edit room details and attribute values';
$lang['permission_rooms.permissions'] = 'Configure room permissions';

$lang['permission_terms.add'] = 'Add a new term';
$lang['permission_terms.delete'] = 'Delete a term';
$lang['permission_terms.edit'] = 'Edit term details';
$lang['permission_terms.view'] = 'View terms';

$lang['permission_users.add'] = 'Add a new user';
$lang['permission_users.delete'] = 'Delete a user';
$lang['permission_users.edit'] = 'Edit user details';
$lang['permission_users.import'] = 'Bulk import users';
$lang['permission_users.view'] = 'View users';

$lang['permission_weeks.add'] = 'Add a timetable week';
$lang['permission_weeks.delete'] = 'Delete a timetable week';
$lang['permission_weeks.edit'] = 'Edit week details';
$lang['permission_weeks.view'] = 'View timetable weeks';

$lang['permission_years.add'] = 'Add a new academic year';
$lang['permission_years.delete'] = 'Delete an academic year';
$lang['permission_years.edit'] = 'Edit and make active an academic year';
$lang['permission_years.view'] = 'View academic years';