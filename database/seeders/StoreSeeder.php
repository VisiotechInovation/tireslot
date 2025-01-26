<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StoreSeeder extends Seeder
{
  public static function settings()
  {
    $currentTime = now();
    return [
      ['parameter' => 'delivery_price', 'value' => '20', 'description' => 'Delivery Price', 'createdby' => 'admin', 'lastmodifiedby' => 'admin', 'created_at' => $currentTime, 'updated_at' => $currentTime],
      ['parameter' => 'limit_category', 'value' => '6', 'description' => 'Limit Category', 'createdby' => 'admin', 'lastmodifiedby' => 'admin', 'created_at' => $currentTime, 'updated_at' => $currentTime],
      ['parameter' => 'site_name', 'value' => 'tireslot', 'description' => 'Site Name', 'createdby' => 'admin', 'lastmodifiedby' => 'admin', 'created_at' => $currentTime, 'updated_at' => $currentTime],
      ['parameter' => 'default_country', 'value' => 'US', 'description' => 'Default shipping country', 'createdby' => 'admin', 'lastmodifiedby' => 'admin', 'created_at' => $currentTime, 'updated_at' => $currentTime],
      ['parameter' => 'low_stock', 'value' => '10', 'description' => 'Low Stock for display tags on product', 'createdby' => 'admin', 'lastmodifiedby' => 'admin', 'created_at' => $currentTime, 'updated_at' => $currentTime],
      ['parameter' => 'limit_load', 'value' => '16', 'description' => 'Limit Load products', 'createdby' => 'admin', 'lastmodifiedby' => 'admin', 'created_at' => $currentTime, 'updated_at' => $currentTime],
      ['parameter' => 'limit_searchitems', 'value' => '10', 'description' => 'Limit items on search', 'createdby' => 'admin', 'lastmodifiedby' => 'admin', 'created_at' => $currentTime, 'updated_at' => $currentTime],
      ['parameter' => 'order_prefix', 'value' => 'TR', 'description' => 'Order prefix', 'createdby' => 'admin', 'lastmodifiedby' => 'admin', 'created_at' => $currentTime, 'updated_at' => $currentTime],
      ['parameter' => 'auto_webp', 'value' => 'true', 'description' => 'Salvare automata a imaginilor in webp (valaore- true-false)', 'createdby' => 'admin', 'lastmodifiedby' => 'admin', 'created_at' => $currentTime, 'updated_at' => $currentTime],
      ['parameter' => 'default_category', 'value' => '1', 'description' => '', 'createdby' => 'admin', 'lastmodifiedby' => 'admin', 'created_at' => $currentTime, 'updated_at' => $currentTime],
      ['parameter' => 'show_on_breadcrumbs', 'value' => 'true', 'description' => '', 'createdby' => 'admin', 'lastmodifiedby' => 'admin', 'created_at' => $currentTime, 'updated_at' => $currentTime],
      ['parameter' => 'show_on_header', 'value' => 'false', 'description' => '', 'createdby' => 'admin', 'lastmodifiedby' => 'admin', 'created_at' => $currentTime, 'updated_at' => $currentTime],
      ['parameter' => 'cash_limit', 'value' => '0', 'description' => 'Limita plata cash', 'createdby' => 'admin', 'lastmodifiedby' => 'admin', 'created_at' => $currentTime, 'updated_at' => $currentTime],
      ['parameter' => 'app_debug', 'value' => 'false', 'description' => 'Appdebug', 'createdby' => 'admin', 'lastmodifiedby' => 'admin', 'created_at' => $currentTime, 'updated_at' => $currentTime],
      ['parameter' => 'time_zone', 'value' => '+0', 'description' => 'Time zone +0,1 or -0,1, current is +3', 'createdby' => 'admin', 'lastmodifiedby' => 'admin', 'created_at' => $currentTime, 'updated_at' => $currentTime],
      ['parameter' => 'mainpage_metadescription', 'value' => '', 'description' => 'Meta descriere prima pagina', 'createdby' => 'admin', 'lastmodifiedby' => 'admin', 'created_at' => $currentTime, 'updated_at' => $currentTime],
      ['parameter' => 'mainpage_metatitle', 'value' => '', 'description' => 'Titlu prima pagina', 'createdby' => 'admin', 'lastmodifiedby' => 'admin', 'created_at' => $currentTime, 'updated_at' => $currentTime],
      ['parameter' => 'site_url', 'value' => 'www.tireslot.com', 'description' => 'URL-ul siteului', 'createdby' => 'admin', 'lastmodifiedby' => 'admin', 'created_at' => $currentTime, 'updated_at' => $currentTime],
      ['parameter' => 'facebook_url', 'value' => '', 'description' => 'link facebook', 'createdby' => 'admin', 'lastmodifiedby' => 'admin', 'created_at' => $currentTime, 'updated_at' => $currentTime],
      ['parameter' => 'instagram_url', 'value' => '', 'description' => 'link instagram', 'createdby' => 'admin', 'lastmodifiedby' => 'admin', 'created_at' => $currentTime, 'updated_at' => $currentTime],
      ['parameter' => 'robots_txt', 'value' => '', 'description' => 'Content for robots.txt (keep in mind to use <br> for a new line)', 'createdby' => 'admin', 'lastmodifiedby' => 'admin', 'created_at' => $currentTime, 'updated_at' => $currentTime],
      ['parameter' => 'theme', 'value' => 'tireslot', 'description' => 'Default store theme', 'createdby' => 'admin', 'lastmodifiedby' => 'admin', 'created_at' => $currentTime, 'updated_at' => $currentTime],
      ['parameter' => 'variant_add_to_cart', 'value' => 'false', 'description' => 'Add product variant to cart', 'createdby' => 'admin', 'lastmodifiedby' => 'admin', 'created_at' => $currentTime, 'updated_at' => $currentTime],
      ['parameter' => 'variant_price_from', 'value' => 'false', 'description' => 'Showing price from to product variant', 'createdby' => 'admin', 'lastmodifiedby' => 'admin', 'created_at' => $currentTime, 'updated_at' => $currentTime],
      ['parameter' => 'support_on', 'value' => 'false', 'description' => 'Support button call', 'createdby' => 'admin', 'lastmodifiedby' => 'admin', 'created_at' => $currentTime, 'updated_at' => $currentTime],
      ['parameter' => 'support_phone_number', 'value' => '', 'description' => 'Support telephone number, must contains the prefix', 'createdby' => 'admin', 'lastmodifiedby' => 'admin', 'created_at' => $currentTime, 'updated_at' => $currentTime],
      ['parameter' => 'display_rating', 'value' => 'none', 'description' => 'Display rating', 'createdby' => 'admin', 'lastmodifiedby' => 'admin', 'created_at' => $currentTime, 'updated_at' => $currentTime],
      ['parameter' => 'display_rating_value', 'value' => 'none', 'description' => 'Display rating value', 'createdby' => 'admin', 'lastmodifiedby' => 'admin', 'created_at' => $currentTime, 'updated_at' => $currentTime],
      ['parameter' => 'numberformat_element', 'value' => '.', 'description' => 'Number format element(is accepted only . or ,)', 'createdby' => 'admin', 'lastmodifiedby' => 'admin', 'created_at' => $currentTime, 'updated_at' => $currentTime],
      ['parameter' => 'preorder', 'value' => 'true', 'description' => 'Order indisponible products', 'createdby' => 'admin', 'lastmodifiedby' => 'admin', 'created_at' => $currentTime, 'updated_at' => $currentTime],
      ['parameter' => 'lang', 'value' => 'us', 'description' => 'Project Language ex: ro', 'createdby' => 'admin', 'lastmodifiedby' => 'admin', 'created_at' => $currentTime, 'updated_at' => $currentTime],
      ['parameter' => 'locale', 'value' => 'us_US', 'description' => 'Project Locale ex: ro_RO', 'createdby' => 'admin', 'lastmodifiedby' => 'admin', 'created_at' => $currentTime, 'updated_at' => $currentTime],
      ['parameter' => 'display_delivery_price_on_cart', 'value' => 'true', 'description' => 'Display Delivery price on cart, default :true', 'createdby' => 'admin', 'lastmodifiedby' => 'admin', 'created_at' => $currentTime, 'updated_at' => $currentTime],
      ['parameter' => 'display_phone_on_pdp', 'value' => 'true', 'description' => 'Display Phone number on pdp, default :true', 'createdby' => 'admin', 'lastmodifiedby' => 'admin', 'created_at' => $currentTime, 'updated_at' => $currentTime],
      ['parameter' => 'display_vat_value', 'value' => 'true', 'description' => 'Display vat value on pdp, default :true', 'createdby' => 'admin', 'lastmodifiedby' => 'admin', 'created_at' => $currentTime, 'updated_at' => $currentTime],
      ['parameter' => 'voucher_system_on', 'value' => 'false', 'description' => 'Store voucher sistem :false', 'createdby' => 'admin', 'lastmodifiedby' => 'admin', 'created_at' => $currentTime, 'updated_at' => $currentTime],
      ['parameter' => 'display_last_visited_products', 'value' => 'true', 'description' => 'Display last visited products on pdp :true', 'createdby' => 'admin', 'lastmodifiedby' => 'admin', 'created_at' => $currentTime, 'updated_at' => $currentTime],
      ['parameter' => 'pagination', 'value' => 'lazy', 'description' => 'Pagination type, accepted: lazy/links', 'createdby' => 'admin', 'lastmodifiedby' => 'admin', 'created_at' => $currentTime, 'updated_at' => $currentTime],
      ['parameter' => 'default_payment', 'value' => 'cash', 'description' => 'Default payment :card|cash', 'createdby' => 'admin', 'lastmodifiedby' => 'admin', 'created_at' => $currentTime, 'updated_at' => $currentTime],
      ['parameter' => 'brand_media_dimension', 'value' => '100', 'description' => 'Brand media dimension: 100,70', 'createdby' => 'admin', 'lastmodifiedby' => 'admin', 'created_at' => $currentTime, 'updated_at' => $currentTime],
      ['parameter' => 'cookie_max_ages', 'value' => '365', 'description' => 'Cookie expire days', 'createdby' => 'admin', 'lastmodifiedby' => 'admin', 'created_at' => $currentTime, 'updated_at' => $currentTime],
      ['parameter' => 'mailserver_mail', 'value' => '', 'description' => 'Mail server name', 'createdby' => 'admin', 'lastmodifiedby' => 'admin', 'created_at' => $currentTime, 'updated_at' => $currentTime],
      ['parameter' => 'mailserver_password', 'value' => '', 'description' => 'Mail app password', 'createdby' => 'admin', 'lastmodifiedby' => 'admin', 'created_at' => $currentTime, 'updated_at' => $currentTime],
      ['parameter' => 'mailserver_bcc_mail', 'value' => '', 'description' => 'bcc mail', 'createdby' => 'admin', 'lastmodifiedby' => 'admin', 'created_at' => $currentTime, 'updated_at' => $currentTime],
      ['parameter' => 'mailserver_from_mail', 'value' => '', 'description' => 'Mail from', 'createdby' => 'admin', 'lastmodifiedby' => 'admin', 'created_at' => $currentTime, 'updated_at' => $currentTime],
      ['parameter' => 'mailserver_from_name', 'value' => '', 'description' => 'Mail name', 'createdby' => 'admin', 'lastmodifiedby' => 'admin', 'created_at' => $currentTime, 'updated_at' => $currentTime],
      ['parameter' => 'check_terms_order', 'value' => 'true', 'description' => 'Check terms on order', 'createdby' => 'admin', 'lastmodifiedby' => 'admin', 'created_at' => $currentTime, 'updated_at' => $currentTime],
      // ['parameter' => '', 'value' => '', 'description' => '', 'createdby' => 'admin', 'lastmodifiedby' => 'admin', 'created_at' => $currentTime, 'updated_at' => $currentTime],

    ];
  }

  public function run(): void
  {
    DB::table('store__settings')->insert(self::settings());
  }
}
