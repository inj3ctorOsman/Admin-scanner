<?php
@set_time_limit(0);
  
if(isset($argv[0])){   
	echo "   
              _           _                                             
     /\      | |         (_)                                            
    /  \   __| |_ __ ___  _ _ __    ___  ___ __ _ _ __  _ __   ___ _ __ 
   / /\ \ / _` | '_ ` _ \| | '_ \  / __|/ __/ _` | '_ \| '_ \ / _ \ '__|
  / ____ \ (_| | | | | | | | | | | \__ \ (_| (_| | | | | | | |  __/ |   
 /_/    \_\__,_|_| |_| |_|_|_| |_| |___/\___\__,_|_| |_|_| |_|\___|_|   
      ";
echo "                                     by inj3ctor Osman\n\n";
}                                                                  
                                                                        
		
if(!isset($argv[1])){
	
echo "[usage:] [php] [$argv[0]] http://site.com/admin \n";
exit();
		}
	echo "\n [%] Enter site extention (html / php / asp / jsp ): "; 
$os = fopen ("php://stdin","r"); 
$ex= fgets($os); 
if(trim($ex))
$admin['end']="/adm-home.$ex
/adm_home.$ex
/admhome.$ex
/adm-index.$ex
/adm_index.$ex
/adm_welcome.$ex
/adm-welcome.$ex
/adm_dashboard.$ex
/adm-dashboard.$ex
/add.$ex
/apanel.$ex
/approve.$ex
/accept.$ex
/admin
/articals
/admin.$ex
/artical.$ex
/adminhome.$ex
/address.$ex
/addRecord.$ex
/add_record.$ex
/admin_home.$ex
/add_property.$ex
/add_label.$ex
/add_quest.$ex
/add_question.$ex
/add_logo.$ex
/add_contacts.$ex
/add_web.$ex
/add_portal.$ex
/add_suggestation.$ex
/add_contact.$ex
/add_post.$ex
/add_account.$ex
/add_email.$ex
/add_articles.$ex
/add_article.$ex
/add_blog.$ex
/add_newspaper.$ex
/add_user.$ex
/add_manager.$ex
/add_test.$ex
/add_school.$ex
/add_college.$ex
/add_district.$ex
/add_tag.$ex
/add_caption.$ex
/add_moderator.$ex
/add_status.$ex
/add_registration.$ex
/add_news.$ex
/add_list.$ex
/add_file.$ex
/add_show.$ex
/add_files.$ex
/add_page.$ex
/add_pages.$ex
/add_admin.$ex
/add_pdf.$ex
/add_site.$ex
/add_cart.$ex
/add_mesaage.$ex
/add_video.$ex
/add_program.$ex
/add_settings.$ex
/add_logins.$ex
/add_partner.$ex
/add_member.$ex
/add_order.$ex
/add_login.$ex
/add_adm.$ex
/add_language.$ex
/add_calender.$ex
/add_link.$ex
/add_links.$ex
/add_product.$ex
/add_products.$ex
/add_store.$ex
/add_category.$ex
/add_categories.$ex
/add_books.$ex
/add_project.$ex
/add_projects.$ex
/add_sql.$ex
/add_note.$ex
/add_notes.$ex
/add-slider.$ex
/add_gallery_image.$ex
/add_slider.$ex
/add_table.$ex
/add_solution.$ex
/add_gallery.$ex
/add_csv.$ex
/add_db.$ex
/add_dbs.$ex
/add_pass.$ex
/add_image.$ex
/add_enquiry.$ex
/add_offer.$ex
/add_offers.$ex
/add_special_offer.$ex
/add_channel.$ex
/add_student.$ex
/add_class.$ex
/add_photo.$ex
/add_banner.$ex
/add_banners.$ex
/add_event.$ex
/add_events.$ex
/add_course.$ex
/add_topic.$ex
/add_trainer.$ex
/add_tutor.$ex
/add_batch.$ex
/addTrainer.$ex
/addBatch.$ex
/addTopic.$ex
/addCourse.$ex
/addManager.$ex
/addTest.$ex
/addPass.$ex
/addImage.$ex
/addEnquiry.$ex
/addEvent.$ex
/addPhoto.$ex
/addChannel.$ex
/addStudent.$ex
/addSpecialoffer.$ex
/addSpecialOffer.$ex
/addClass.$ex
/addOffer.$ex
/addDb.$ex
/addBanner.$ex
/addbanner.$ex
/addUser.$ex
/addNews.$ex
/addList.$ex
/addFile.$ex
/addFiles.$ex
/addPage.$ex
/addPages.$ex
/addAdmin.$ex
/addPdf.$ex
/addSite.$ex
/addCart.$ex
/addProject.$ex
/addProjects.$ex
/addProduct.$ex
/addProducts.$ex
/addStore.$ex
/addCategory.$ex
/addCategories.$ex
/addSlider.$ex
/addBooks.$ex
/addBook.$ex
/addNote.$ex
/addSql.$ex
/addNotes.$ex
/banner.$ex
/banned.$ex
/block.$ex
/blocked.$ex
/based.$ex
/backup.$ex
/basic.$ex
/brought.$ex
/bought.$ex
/buy.$ex
/cart.$ex
/case.$ex
/change.$ex
/change_pass.$ex
/change_password.$ex
/changepass.$ex
/changepasswor.$ex
/change-pass.$ex
/change-password.$ex
/complaint.$ex
/complaints.$ex
/counter.$ex
/count.$ex
/clear.$ex
/class.pph
/del.$ex
/del_user.$ex
/del_record.$ex
/delrecord.$ex
/delpic.$ex
/Del_pic.$ex
/delete.$ex
/door.$ex
/date.$ex
/delrecord.$ex
/dashboard
/dashboard.$ex
/data.$ex
/dates.$ex
/enquiry.$ex
/edit.$ex
/editphoto.$ex
/editrecord.$ex
/edituser.$ex
/editcomment.$ex
/edit_comment.$ex
/edit_photo.$ex
/edit_record.$ex
/edit_user.$ex
/edit_manager.$ex
/edit_test.$ex
/edit_news.$ex
/edit_list.$ex
/edit_file.$ex
/edit_files.$ex
/edit_page.$ex
/edit_pages.$ex
/edit_admin.$ex
/edit_pdf.$ex
/edit_site.$ex
/edit_cart.$ex
/edit_mesaage.$ex
/edit_video.$ex
/edit_program.$ex
/edit_settings.$ex
/edit_logins.$ex
/edit_login.$ex
/edit_adm.$ex
/edit_language.$ex
/edit_calender.$ex
/edit_link.$ex
/edit_links.$ex
/edit_product.$ex
/edit_products.$ex
/edit_store.$ex
/edit_category.$ex
/edit_categories.$ex
/edit_books.$ex
/edit_sql.$ex
/edit_note.$ex
/edit_notes.$ex
/edit-slider.$ex
/edit_gallery_image.$ex
/edit_slider.$ex
/edit_gallery.$ex
/edit_csv.$ex
/edit_db.$ex
/edit_project.$ex
/edit_projects.$ex
/edit_dbs.$ex
/edit_pass.$ex
/edit_image.$ex
/edit_enquiry.$ex
/edit_offer.$ex
/edit_offers.$ex
/edit_special_offer.$ex
/edit_channel.$ex
/edit_student.$ex
/edit_class.$ex
/edit_photo.$ex
/edit_banner.$ex
/edit_banners.$ex
/edit_event.$ex
/edit_menu.$ex
/edit-menu.$ex
/edit_events.$ex
/edit_gallery.$ex
/edit-gallery.$ex
/add-galley.$ex
/add_gallery.$ex
/manage_gallery.$ex
/manage-gallery.$ex
/menu.$ex
/gallery
/gallery.$ex
/home
/home.$ex
/index2.$ex
/index.$ex
/jet.$ex
/jetking.$ex
/manage.$ex
/main.$ex
/modify_user.$ex
/modify_manager.$ex
/modify_test.$ex
/modify_news.$ex
/manage_project.$ex
/manage_projects.$ex
/modify_list.$ex
/modify_file.$ex
/modify_files.$ex
/modify_page.$ex
/modify_pages.$ex
/modify_admin.$ex
/modify_pdf.$ex
/modify_site.$ex
/modify_cart.$ex
/modify_mesaage.$ex
/modify_video.$ex
/modify_program.$ex
/modify_settings.$ex
/modify_logins.$ex
/modify_login.$ex
/modify_adm.$ex
/modify_language.$ex
/modify_calender.$ex
/modify_link.$ex
/modify_links.$ex
/modify_product.$ex
/modify_products.$ex
/modify_store.$ex
/modify_category.$ex
/modify_categories.$ex
/modify_books.$ex
/modify_sql.$ex
/modify_note.$ex
/modify_notes.$ex
/modify-slider.$ex
/modify_gallery_image.$ex
/modify_slider.$ex
/modify_gallery.$ex
/modify_csv.$ex
/modify_db.$ex
/modify_project.$ex
/modify_projects.$ex
/modify_dbs.$ex
/modify_pass.$ex
/modify_image.$ex
/modify_enquiry.$ex
/modify_offer.$ex
/modify_offers.$ex
/modify_special_offer.$ex
/modify_channel.$ex
/modify_student.$ex
/modify_class.$ex
/modify_photo.$ex
/modify_banner.$ex
/modify_banners.$ex
/modify_event.$ex
/modify_events.$ex
/manage_user.$ex
/manage_manager.$ex
/manage_test.$ex
/manage_news.$ex
/manage_list.$ex
/manage_file.$ex
/manage_files.$ex
/manage_page.$ex
/manage_pages.$ex
/manage_project.$ex
/manage_projects.$ex
/manage_admin.$ex
/manage_pdf.$ex
/manage_site.$ex
/manage_cart.$ex
/manage_mesaage.$ex
/manage_video.$ex
/manage_program.$ex
/manage_settings.$ex
/manage_logins.$ex
/manage_login.$ex
/manage_adm.$ex
/manage_language.$ex
/manage_calender.$ex
/manage_link.$ex
/manage_links.$ex
/manage_product.$ex
/manage_products.$ex
/manage_store.$ex
/manage_category.$ex
/manage_categories.$ex
/manage_books.$ex
/manage_sql.$ex
/manage_note.$ex
/manage_notes.$ex
/manage-slider.$ex
/manage_gallery_image.$ex
/manage_slider.$ex
/manage_gallery.$ex
/manage_csv.$ex
/manage_db.$ex
/manage_dbs.$ex
/manage_pass.$ex
/manage_image.$ex
/manage_enquiry.$ex
/manage_offer.$ex
/manage_offers.$ex
/manage_special_offer.$ex
/manage_channel.$ex
/manage_student.$ex
/manage_class.$ex
/manage_photo.$ex
/manage_banner.$ex
/manage_banners.$ex
/manage_event.$ex
/manage_events.$ex
/panel
/page
/pages
/remove_user.$ex
/remove_manager.$ex
/remove_test.$ex
/remove_news.$ex
/remove_project.$ex
/remove_projects.$ex
/remove_list.$ex
/remove_file.$ex
/remove_files.$ex
/remove_page.$ex
/remove_pages.$ex
/remove_admin.$ex
/remove_pdf.$ex
/remove_site.$ex
/remove_cart.$ex
/remove_mesaage.$ex
/remove_video.$ex
/remove_program.$ex
/remove_settings.$ex
/remove_logins.$ex
/remove_login.$ex
/remove_adm.$ex
/remove_language.$ex
/remove_calender.$ex
/remove_link.$ex
/remove_links.$ex
/remove_product.$ex
/remove_products.$ex
/remove_store.$ex
/remove_category.$ex
/remove_categories.$ex
/remove_books.$ex
/remove_sql.$ex
/remove_note.$ex
/remove_notes.$ex
/remove-slider.$ex
/remove_gallery_image.$ex
/remove_slider.$ex
/remove_gallery.$ex
/remove_csv.$ex
/remove_db.$ex
/remove_dbs.$ex
/remove_pass.$ex
/remove_image.$ex
/remove_enquiry.$ex
/remove_offer.$ex
/remove_offers.$ex
/remove_special_offer.$ex
/remove_channel.$ex
/remove_student.$ex
/remove_class.$ex
/remove_photo.$ex
/remove_banner.$ex
/remove_banners.$ex
/remove_event.$ex
/remove_events.$ex
/site.$ex
/submit.$ex
/status.$ex
/testamonial.$ex
/td.$ex
/upload.$ex
/uploads.$ex
/update_property.$ex
/update_account.$ex
/update_email.$ex
/update_articales.$ex
/update_artical.$ex
/update_user.$ex
/update_manager.$ex
/update_test.$ex
/update_school.$ex
/update_college.$ex
/update_district.$ex
/update_tag.$ex
/update_caption.$ex
/update_moderator.$ex
/update_status.$ex
/update_registration.$ex
/update_news.$ex
/update_list.$ex
/update_file.$ex
/update_show.$ex
/update_files.$ex
/update_page.$ex
/update_pages.$ex
/update_admin.$ex
/update_pdf.$ex
/update_site.$ex
/update_cart.$ex
/update_mesaage.$ex
/update_video.$ex
/update_program.$ex
/update_settings.$ex
/update_logins.$ex
/update_partner.$ex
/update_member.$ex
/update_order.$ex
/update_login.$ex
/update_adm.$ex
/update_language.$ex
/update_calender.$ex
/update_link.$ex
/update_links.$ex
/update_product.$ex
/update_products.$ex
/update_store.$ex
/update_category.$ex
/update_categories.$ex
/update_books.$ex
/update_project.$ex
/update_projects.$ex
/update_sql.$ex
/update_note.$ex
/update_notes.$ex
/update-slider.$ex
/update_gallery_image.$ex
/update_slider.$ex
/update_gallery.$ex
/update_csv.$ex
/update_db.$ex
/update_dbs.$ex
/update_pass.$ex
/update_image.$ex
/update_enquiry.$ex
/update_offer.$ex
/update_offers.$ex
/update_special_offer.$ex
/update_channel.$ex
/update_student.$ex
/update_class.$ex
/update_photo.$ex
/update_banner.$ex
/update_banners.$ex
/update_event.$ex
/update_events.$ex
/update_course.$ex
/update_topic.$ex
/update_trainer.$ex
/update_tutor.$ex
/update_batch.$ex
/view_user.$ex
/view_manager.$ex
/view_test.$ex
/view_news.$ex
/view_list.$ex
/view_file.$ex
/view_files.$ex
/view_page.$ex
/view_pages.$ex
/view_admin.$ex
/view_pdf.$ex
/view_site.$ex
/view_cart.$ex
/view_mesaage.$ex
/view_video.$ex
/view_program.$ex
/view_projects.$ex
/view_project.$ex
/view_settings.$ex
/view_logins.$ex
/view_login.$ex
/view_adm.$ex
/view_language.$ex
/view_calender.$ex
/view_link.$ex
/view_links.$ex
/view_product.$ex
/view_products.$ex
/view_store.$ex
/view_category.$ex
/view_categories.$ex
/view_books.$ex
/view_sql.$ex
/view_note.$ex
/view_notes.$ex
/view-slider.$ex
/view_gallery_image.$ex
/view_slider.$ex
/view_gallery.$ex
/view_csv.$ex
/view_db.$ex
/view_dbs.$ex
/view_pass.$ex
/view_image.$ex
/view_enquiry.$ex
/view_offer.$ex
/view_offers.$ex
/view_special_offer.$ex
/view_channel.$ex
/view_student.$ex
/view_class.$ex
/view_photo.$ex
/view_banner.$ex
/view_banners.$ex
/view_event.$ex
/view_events.$ex
/add-email.$ex
/add-user.$ex
/add-manager.$ex
/add-test.$ex
/add-news.$ex
/add-list.$ex
/add-file.$ex
/add-files.$ex
/add-page.$ex
/add-pages.$ex
/add-admin.$ex
/add-pdf.$ex
/add-site.$ex
/add-cart.$ex
/add-mesaage.$ex
/add-video.$ex
/add-program.$ex
/add-settings.$ex
/add-logins.$ex
/add-login.$ex
/add-adm.$ex
/add-language.$ex
/add-calender.$ex
/add-link.$ex
/add-links.$ex
/add-product.$ex
/add-products.$ex
/add-store.$ex
/add-category.$ex
/add-categories.$ex
/add-books.$ex
/add-sql.$ex
/add-note.$ex
/add-notes.$ex
/add-slider.$ex
/add-gallery-image.$ex
/add-slider.$ex
/add-gallery.$ex
/add-csv.$ex
/add-db.$ex
/add-dbs.$ex
/add-pass.$ex
/add-image.$ex
/add-enquiry.$ex
/add-offer.$ex
/add-offers.$ex
/add-special-offer.$ex
/add-channel.$ex
/add-student.$ex
/add-class.$ex
/add-photo.$ex
/add-banner.$ex
/add-banners.$ex
/add-event.$ex
/add-events.$ex
/edit-user.$ex
/edit-manager.$ex
/edit-test.$ex
/edit-news.$ex
/edit-list.$ex
/edit-file.$ex
/edit-files.$ex
/edit-page.$ex
/edit-pages.$ex
/edit-admin.$ex
/edit-pdf.$ex
/edit-site.$ex
/edit-cart.$ex
/edit-mesaage.$ex
/edit-video.$ex
/edit-program.$ex
/edit-settings.$ex
/edit-logins.$ex
/edit-login.$ex
/edit-adm.$ex
/edit-language.$ex
/edit-calender.$ex
/edit-link.$ex
/edit-links.$ex
/edit-product.$ex
/edit-products.$ex
/edit-store.$ex
/edit-category.$ex
/edit-categories.$ex
/edit-books.$ex
/edit-sql.$ex
/edit-note.$ex
/edit-notes.$ex
/edit-slider.$ex
/edit-gallery-image.$ex
/edit-slider.$ex
/edit-gallery.$ex
/edit-csv.$ex
/edit-db.$ex
/edit-dbs.$ex
/edit-pass.$ex
/edit-image.$ex
/edit-enquiry.$ex
/edit-offer.$ex
/edit-offers.$ex
/edit-special-offer.$ex
/edit-channel.$ex
/edit-student.$ex
/edit-class.$ex
/edit-photo.$ex
/edit-banner.$ex
/edit-banners.$ex
/edit-event.$ex
/edit-events.$ex
/modify-user.$ex
/modify-manager.$ex
/modify-test.$ex
/modify-news.$ex
/modify-list.$ex
/modify-file.$ex
/modify-files.$ex
/modify-page.$ex
/modify-pages.$ex
/modify-admin.$ex
/modify-pdf.$ex
/modify-site.$ex
/modify-cart.$ex
/modify-mesaage.$ex
/modify-video.$ex
/modify-program.$ex
/modify-settings.$ex
/modify-logins.$ex
/modify-login.$ex
/modify-adm.$ex
/modify-language.$ex
/modify-calender.$ex
/modify-link.$ex
/modify-links.$ex
/modify-product.$ex
/modify-products.$ex
/modify-store.$ex
/modify-category.$ex
/modify-categories.$ex
/modify-books.$ex
/modify-sql.$ex
/modify-note.$ex
/modify-notes.$ex
/modify-slider.$ex
/modify-gallery-image.$ex
/modify-slider.$ex
/modify-gallery.$ex
/modify-csv.$ex
/modify-db.$ex
/modify-dbs.$ex
/modify-pass.$ex
/modify-image.$ex
/modify-enquiry.$ex
/modify-offer.$ex
/modify-offers.$ex
/modify-special-offer.$ex
/modify-channel.$ex
/modify-student.$ex
/modify-class.$ex
/modify-photo.$ex
/modify-banner.$ex
/modify-banners.$ex
/modify-event.$ex
/modify-events.$ex
/manage-user.$ex
/manage-manager.$ex
/manage-test.$ex
/manage-news.$ex
/manage-list.$ex
/manage-file.$ex
/manage-files.$ex
/manage-page.$ex
/manage-pages.$ex
/manage-admin.$ex
/manage-pdf.$ex
/manage-site.$ex
/manage-cart.$ex
/manage-mesaage.$ex
/manage-video.$ex
/manage-program.$ex
/manage-settings.$ex
/manage-logins.$ex
/manage-login.$ex
/manage-adm.$ex
/manage-language.$ex
/manage-calender.$ex
/manage-link.$ex
/manage-links.$ex
/manage-product.$ex
/manage-products.$ex
/manage-store.$ex
/manage-category.$ex
/manage-categories.$ex
/manage-books.$ex
/manage-sql.$ex
/manage-note.$ex
/manage-notes.$ex
/manage-slider.$ex
/manage-gallery-image.$ex
/manage-slider.$ex
/manage-gallery.$ex
/manage-csv.$ex
/manage-db.$ex
/manage-dbs.$ex
/manage-pass.$ex
/manage-image.$ex
/manage-enquiry.$ex
/manage-offer.$ex
/manage-offers.$ex
/manage-special-offer.$ex
/manage-channel.$ex
/manage-student.$ex
/manage-class.$ex
/manage-photo.$ex
/manage-banner.$ex
/manage-banners.$ex
/manage-event.$ex
/manage-events.$ex
/remove-user.$ex
/remove-manager.$ex
/remove-test.$ex
/remove-news.$ex
/remove-list.$ex
/remove-file.$ex
/remove-files.$ex
/remove-page.$ex
/remove-pages.$ex
/remove-admin.$ex
/remove-pdf.$ex
/remove-site.$ex
/remove-cart.$ex
/remove-mesaage.$ex
/remove-video.$ex
/remove-program.$ex
/remove-settings.$ex
/remove-logins.$ex
/remove-login.$ex
/remove-adm.$ex
/remove-language.$ex
/remove-calender.$ex
/remove-link.$ex
/remove-links.$ex
/remove-product.$ex
/remove-products.$ex
/remove-store.$ex
/remove-category.$ex
/remove-categories.$ex
/remove-books.$ex
/remove-sql.$ex
/remove-note.$ex
/remove-notes.$ex
/remove-slider.$ex
/remove-gallery-image.$ex
/remove-slider.$ex
/remove-gallery.$ex
/remove-csv.$ex
/remove-db.$ex
/remove-dbs.$ex
/remove-pass.$ex
/remove-image.$ex
/remove-enquiry.$ex
/remove-offer.$ex
/remove-offers.$ex
/remove-special-offer.$ex
/remove-channel.$ex
/remove-student.$ex
/remove-class.$ex
/remove-photo.$ex
/remove-banner.$ex
/remove-banners.$ex
/remove-event.$ex
/remove-events.$ex
/admin-home.$ex
/update-property.$ex
/update-account.$ex
/update-email.$ex
/update-articales.$ex
/update-artical.$ex
/update-user.$ex
/update-manager.$ex
/update-test.$ex
/update-school.$ex
/update-college.$ex
/update-district.$ex
/update-tag.$ex
/update-caption.$ex
/update-moderator.$ex
/update-status.$ex
/update-registration.$ex
/update-news.$ex
/update-list.$ex
/update-file.$ex
/update-show.$ex
/update-files.$ex
/update-page.$ex
/update-pages.$ex
/update-admin.$ex
/update-pdf.$ex
/update-site.$ex
/update-cart.$ex
/update-mesaage.$ex
/update-video.$ex
/update-program.$ex
/update-settings.$ex
/update-logins.$ex
/update-partner.$ex
/update-member.$ex
/update-order.$ex
/update-login.$ex
/update-adm.$ex
/update-language.$ex
/update-calender.$ex
/update-link.$ex
/update-links.$ex
/update-product.$ex
/update-products.$ex
/update-store.$ex
/update-category.$ex
/update-categories.$ex
/update-books.$ex
/update-project.$ex
/update-projects.$ex
/update-sql.$ex
/update-note.$ex
/update-notes.$ex
/update-slider.$ex
/update-gallery-image.$ex
/update-slider.$ex
/update-gallery.$ex
/update-csv.$ex
/update-db.$ex
/update-dbs.$ex
/update-pass.$ex
/update-image.$ex
/update-enquiry.$ex
/update-offer.$ex
/update-offers.$ex
/update-special-offer.$ex
/update-channel.$ex
/update-student.$ex
/update-class.$ex
/update-photo.$ex
/update-banner.$ex
/update-banners.$ex
/update-event.$ex
/update-events.$ex
/update-course.$ex
/update-topic.$ex
/update-trainer.$ex
/update-tutor.$ex
/update-batch.$ex
/view-user.$ex
/view-manager.$ex
/view-test.$ex
/view-news.$ex
/view-list.$ex
/view-file.$ex
/view-files.$ex
/view-page.$ex
/view-pages.$ex
/view-admin.$ex
/view-pdf.$ex
/view-site.$ex
/view-cart.$ex
/view-mesaage.$ex
/view-video.$ex
/view-program.$ex
/view-settings.$ex
/view-logins.$ex
/view-login.$ex
/view-adm.$ex
/view-language.$ex
/view-calender.$ex
/view-link.$ex
/view-links.$ex
/view-product.$ex
/view-products.$ex
/view-store.$ex
/view-category.$ex
/view-categories.$ex
/view-books.$ex
/view-sql.$ex
/view-note.$ex
/view-notes.$ex
/view-slider.$ex
/view-gallery-image.$ex
/view-slider.$ex
/view-gallery.$ex
/view-csv.$ex
/view-db.$ex
/view-dbs.$ex
/view-pass.$ex
/view-image.$ex
/view-enquiry.$ex
/view-offer.$ex
/view-offers.$ex
/view-special-offer.$ex
/view-channel.$ex
/view-student.$ex
/view-class.$ex
/view-photo.$ex
/view-banner.$ex
/view-banners.$ex
/view-event.$ex
/view-events.$ex
/welcome.$ex
/password.$ex
/allfemalemem_reports.$ex
/allmalemem_reports.$ex
/approvals.$ex
/approve_active_to_paid.$ex
/approve_horos.$ex
/approve_inactive_to_active.$ex
/approve_photo1.$ex
/approve_photo2.$ex
/approve_photo3.$ex
/approve_ss.$ex
/others.$ex
/renewals.$ex
/reports.$ex
/setcontacts.$ex
/unapprove_ss.$ex
/home_index.$ex
/admin_index.$ex
/addformfillup.$ex
/sttab_index.$ex
/suntab_index.$ex
/montab_index.$ex
/r-tuetab_index.$ex
/r-wedtab_index.$ex
/r-thtab_index.$ex
/hsc3g.$ex
/0ld_registration.$ex
/AccountMaster.$ex
/ClientBillPaymentReport.$ex
/DesignationMaster.$ex
/DomainDetails.$ex
/DomainRenewal.$ex
/EmployeeMaster.$ex
/EmployeeWorksheet.$ex
/MonthWiseDomainExpiration.$ex
/PaymentInvoice.$ex
/ReceiptInvoice.$ex
/ReceivedBillPaymentReport.$ex
/SourceMaster.$ex
/accountLedger.$ex
/account_list.$ex
/ajax_check_username.$ex
/ajax_check_username_intermediate.$ex
/ajxcollege.$ex
/campusmaster.$ex
/campusname_list.$ex
/campusselection.$ex
/candidateDocRecords.$ex
/candidate_list.$ex
/candidatedocsave.$ex
/categoryMaster.$ex
/category_List.$ex
/category_list.$ex
/category_master.$ex
/category_reports.$ex
/citymaster.$ex
/citymaster_List.$ex
/class.$exmailer.$ex
/class.smtp.$ex
/clientMaster.$ex
/client_list.$ex
/all_banner.$ex
/all_classroutine.$ex
/all_contact.$ex
/all_department.$ex
/all_event.$ex
/all_event.$ex
/all_examroutine.$ex
/all_gallery.$ex
/all_notice.$ex
/all_result.$ex
/all_student.$ex
/all_teacher.$ex
/all_text.$ex
/companyMaster.$ex
/company_List.$ex
/company_master.$ex
/companymat_save.$ex
/connection.$ex
/convertpdf.$ex
/convertxl.$ex
/aboutcmc.$ex
/add-visitor.$ex
/country_master.$ex
/countrymaster.$ex
/countrymaster_List.$ex
/dailyreport.$ex
/dbutils.$ex
/delcandidatedoc.$ex
/deldata.$ex
/delempdoc.$ex
/delinvoice.$ex
/designation_list.$ex
/document_list.$ex
/documenttypemaster.$ex
/domainSaveWithMailing.$ex
/domain_list.$ex
/editinvoice.$ex
/emp.$ex
/employeeDocRecords.$ex
/employee_list.$ex
/employeedocsave.$ex
/financialyearmaster.$ex
/fpdf.css
/fpdf.$ex
/generalVoucher.$ex
/good_category.$ex
/invoice.$ex
/item_mapping.$ex
/item_master.$ex
/journalVoucher.$ex
/party_list.$ex
/paymentVoucher.$ex
/printdetails.$ex
/productCategoryMaster.$ex
/product_list.$ex
/product_master.$ex
/productcategory_list.$ex
/projectMaster.$ex
/projectTeam.$ex
/projectname_list.$ex
/projectreport.$ex
/projectstatus.$ex
/receiptVoucher.$ex
/savedata.$ex
/savegeneralvoucherdata.$ex
/saveinvoice.$ex
/savepaymentvoucherdata.$ex
/savereceiptvoucherdata.$ex
/scorecardexample2.$ex
/search_category.$ex
/select_subcategory.$ex
/send.$ex
/sendmail.$ex
/source_List.$ex
/statemaster.$ex
/statemaster_list.$ex
/studentwisedetail.$ex
/subcategory_list.$ex
/subcategory_master.$ex
/subjectmaster.$ex
/tasksheet.$ex
/template_css.css
/transactionMaster.$ex
/transactionReport.$ex
/transactionTypeMaster.$ex
/transactiontype_list.$ex
/try.$ex
/add_blog.$ex
/view_article.$ex
/view_banner.$ex
/view_blog.$ex
/view_category.$ex
/view_contact.$ex
/view_logo.$ex
/view_member.$ex
/view_news.$ex
/view_newspaper.$ex
/unit_master.$ex
/upload_manager.$ex
/user.$ex
/import_index.$ex
/std_index.$ex
/t_index.$ex
/top_index.$ex
/result_index.$ex
/reg_index.$ex
/vice_index.$ex
/pc_index.$ex
/facilities
/campus
/unifam
/chairman
/principal
/staff-members
/staffvacancies
/games
/alumni
/guestbook
/tenders
/photogallery
/links
/contact-us
/bulksms
/backup
/sms";

if(isset($argv[1])){
	$url=$argv[1];
	$count = substr_count($admin['end'], "/")+1;
	echo " [*] Connecting to $argv[1]\n ";
	echo "_______________________________________\n";
echo " [*] Loading Panels......... \n ";
echo "[*] $count panels are Loaded. \n ";
echo "_______________________________________\n";
echo "\n [*]  Scanning Started.... \n ";
		$admin['end']=str_replace("\r","",$admin['end']); 
		$pathes=explode("\n",$admin['end']);
	foreach($pathes as $admins){
		
		if(strpos($url, 'http://') !== 0) {
			$url='http://'.$url;
	$path = $url.$admins;	
	
	$getpath = get_headers($path); 		
		if (preg_match('/200/i', $getpath[0]))		
      {
  echo "[+] $path  : Found \n";		
 
} elseif (preg_match('/302/i', $getpath[0]))		
      {
  echo "[+] $path  : 302 redirection \n";

        }
	}
	
	else {
		$path = $url.$admins;
	$getpath = get_headers($path); 		
		if (preg_match('/200/i', $getpath[0]))		
      {
  echo "[+] $path  : Found \n";		
 
} elseif (preg_match('/302/i', $getpath[0]))		
      {
  echo "[+] $path  : 302 redirection \n";
 
                }	
	         }
	    	}
		echo " [-] All Panels Done...Job Finished \n";
		}
?> 
