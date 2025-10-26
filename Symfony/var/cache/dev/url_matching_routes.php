<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => null, 'crudAction' => null], null, null, null, false, false, null]],
        '/admin/carousel' => [[['_route' => 'admin_carousel_index', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\CarouselCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CarouselCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/carousel/new' => [[['_route' => 'admin_carousel_new', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\CarouselCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CarouselCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/carousel/batch-delete' => [[['_route' => 'admin_carousel_batch_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\CarouselCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CarouselCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/carousel/autocomplete' => [[['_route' => 'admin_carousel_autocomplete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\CarouselCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CarouselCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/carousel/render-filters' => [[['_route' => 'admin_carousel_render_filters', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\CarouselCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CarouselCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/admin/carousel-image' => [[['_route' => 'admin_carousel_image_index', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\CarouselImageCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CarouselImageCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/carousel-image/new' => [[['_route' => 'admin_carousel_image_new', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\CarouselImageCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CarouselImageCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/carousel-image/batch-delete' => [[['_route' => 'admin_carousel_image_batch_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\CarouselImageCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CarouselImageCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/carousel-image/autocomplete' => [[['_route' => 'admin_carousel_image_autocomplete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\CarouselImageCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CarouselImageCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/carousel-image/render-filters' => [[['_route' => 'admin_carousel_image_render_filters', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\CarouselImageCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CarouselImageCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/admin/details-section-image' => [[['_route' => 'admin_details_section_image_index', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\DetailsSectionImageCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\DetailsSectionImageCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/details-section-image/new' => [[['_route' => 'admin_details_section_image_new', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\DetailsSectionImageCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\DetailsSectionImageCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/details-section-image/batch-delete' => [[['_route' => 'admin_details_section_image_batch_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\DetailsSectionImageCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\DetailsSectionImageCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/details-section-image/autocomplete' => [[['_route' => 'admin_details_section_image_autocomplete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\DetailsSectionImageCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\DetailsSectionImageCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/details-section-image/render-filters' => [[['_route' => 'admin_details_section_image_render_filters', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\DetailsSectionImageCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\DetailsSectionImageCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/admin/image' => [[['_route' => 'admin_image_index', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ImageCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ImageCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/image/new' => [[['_route' => 'admin_image_new', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ImageCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ImageCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/image/batch-delete' => [[['_route' => 'admin_image_batch_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ImageCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ImageCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/image/autocomplete' => [[['_route' => 'admin_image_autocomplete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ImageCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ImageCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/image/render-filters' => [[['_route' => 'admin_image_render_filters', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ImageCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ImageCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/admin/message' => [[['_route' => 'admin_message_index', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\MessageCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\MessageCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/message/new' => [[['_route' => 'admin_message_new', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\MessageCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\MessageCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/message/batch-delete' => [[['_route' => 'admin_message_batch_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\MessageCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\MessageCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/message/autocomplete' => [[['_route' => 'admin_message_autocomplete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\MessageCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\MessageCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/message/render-filters' => [[['_route' => 'admin_message_render_filters', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\MessageCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\MessageCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/admin/page' => [[['_route' => 'admin_page_index', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\PageCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\PageCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/page/new' => [[['_route' => 'admin_page_new', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\PageCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\PageCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/page/batch-delete' => [[['_route' => 'admin_page_batch_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\PageCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\PageCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/page/autocomplete' => [[['_route' => 'admin_page_autocomplete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\PageCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\PageCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/page/render-filters' => [[['_route' => 'admin_page_render_filters', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\PageCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\PageCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/admin/price-list' => [[['_route' => 'admin_price_list_index', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\PriceListCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\PriceListCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/price-list/new' => [[['_route' => 'admin_price_list_new', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\PriceListCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\PriceListCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/price-list/batch-delete' => [[['_route' => 'admin_price_list_batch_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\PriceListCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\PriceListCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/price-list/autocomplete' => [[['_route' => 'admin_price_list_autocomplete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\PriceListCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\PriceListCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/price-list/render-filters' => [[['_route' => 'admin_price_list_render_filters', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\PriceListCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\PriceListCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/admin/section' => [[['_route' => 'admin_section_index', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\SectionCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\SectionCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/section/new' => [[['_route' => 'admin_section_new', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\SectionCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\SectionCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/section/batch-delete' => [[['_route' => 'admin_section_batch_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\SectionCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\SectionCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/section/autocomplete' => [[['_route' => 'admin_section_autocomplete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\SectionCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\SectionCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/section/render-filters' => [[['_route' => 'admin_section_render_filters', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\SectionCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\SectionCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/admin/slider' => [[['_route' => 'admin_slider_index', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\SliderCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\SliderCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/slider/new' => [[['_route' => 'admin_slider_new', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\SliderCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\SliderCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/slider/batch-delete' => [[['_route' => 'admin_slider_batch_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\SliderCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\SliderCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/slider/autocomplete' => [[['_route' => 'admin_slider_autocomplete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\SliderCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\SliderCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/slider/render-filters' => [[['_route' => 'admin_slider_render_filters', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\SliderCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\SliderCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/admin/slider-image' => [[['_route' => 'admin_slider_image_index', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\SliderImageCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\SliderImageCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/slider-image/new' => [[['_route' => 'admin_slider_image_new', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\SliderImageCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\SliderImageCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/slider-image/batch-delete' => [[['_route' => 'admin_slider_image_batch_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\SliderImageCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\SliderImageCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/slider-image/autocomplete' => [[['_route' => 'admin_slider_image_autocomplete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\SliderImageCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\SliderImageCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/slider-image/render-filters' => [[['_route' => 'admin_slider_image_render_filters', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\SliderImageCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\SliderImageCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/admin/user' => [[['_route' => 'admin_user_index', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UserCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/user/new' => [[['_route' => 'admin_user_new', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UserCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/user/batch-delete' => [[['_route' => 'admin_user_batch_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UserCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/user/autocomplete' => [[['_route' => 'admin_user_autocomplete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UserCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/user/render-filters' => [[['_route' => 'admin_user_render_filters', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UserCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/_wdt/styles' => [[['_route' => '_wdt_stylesheet', '_controller' => 'web_profiler.controller.profiler::toolbarStylesheetAction'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::index'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\LoginController::logout'], null, null, null, false, false, null]],
        '/signin' => [[['_route' => 'app_signin', '_controller' => 'App\\Controller\\SigninController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/a(?'
                    .'|pi(?'
                        .'|/(?'
                            .'|docs(?:\\.([^/]++))?(*:40)'
                            .'|\\.well\\-known/genid/([^/]++)(*:75)'
                            .'|validation_errors/([^/]++)(*:108)'
                        .')'
                        .'|(?:/(index)(?:\\.([^/]++))?)?(*:145)'
                        .'|/(?'
                            .'|c(?'
                                .'|ontexts/([^.]+)(?:\\.(jsonld))?(*:191)'
                                .'|arousel(?'
                                    .'|s(?'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(*:239)'
                                        .'|(?:\\.([^/]++))?(*:262)'
                                    .')'
                                    .'|_images(?'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(*:307)'
                                        .'|(?:\\.([^/]++))?(*:330)'
                                    .')'
                                .')'
                            .')'
                            .'|errors/(\\d+)(?:\\.([^/]++))?(*:368)'
                            .'|validation_errors/([^/]++)(?'
                                .'|(*:405)'
                            .')'
                            .'|details_section_images(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:465)'
                                .'|(?:\\.([^/]++))?(*:488)'
                            .')'
                            .'|images(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:532)'
                                .'|(?:\\.([^/]++))?(*:555)'
                            .')'
                            .'|messages(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:601)'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:627)'
                                .')'
                            .')'
                            .'|p(?'
                                .'|ages(?'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(*:674)'
                                    .'|(?:\\.([^/]++))?(*:697)'
                                .')'
                                .'|rice_lists(?'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(*:745)'
                                    .'|(?:\\.([^/]++))?(*:768)'
                                .')'
                            .')'
                            .'|s(?'
                                .'|ections(?'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(*:818)'
                                    .'|(?:\\.([^/]++))?(*:841)'
                                .')'
                                .'|lider(?'
                                    .'|s(?'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(*:888)'
                                        .'|(?:\\.([^/]++))?(*:911)'
                                    .')'
                                    .'|_images(?'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(*:956)'
                                        .'|(?:\\.([^/]++))?(*:979)'
                                    .')'
                                .')'
                            .')'
                            .'|users(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:1016)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:1055)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|dmin/(?'
                        .'|carousel(?'
                            .'|/([^/]++)(?'
                                .'|/(?'
                                    .'|edit(*:1107)'
                                    .'|delete(*:1122)'
                                .')'
                                .'|(*:1132)'
                            .')'
                            .'|\\-image/([^/]++)(?'
                                .'|/(?'
                                    .'|edit(*:1169)'
                                    .'|delete(*:1184)'
                                .')'
                                .'|(*:1194)'
                            .')'
                        .')'
                        .'|details\\-section\\-image/([^/]++)(?'
                            .'|/(?'
                                .'|edit(*:1248)'
                                .'|delete(*:1263)'
                            .')'
                            .'|(*:1273)'
                        .')'
                        .'|image/([^/]++)(?'
                            .'|/(?'
                                .'|edit(*:1308)'
                                .'|delete(*:1323)'
                            .')'
                            .'|(*:1333)'
                        .')'
                        .'|message/([^/]++)(?'
                            .'|/(?'
                                .'|edit(*:1370)'
                                .'|delete(*:1385)'
                            .')'
                            .'|(*:1395)'
                        .')'
                        .'|p(?'
                            .'|age/([^/]++)(?'
                                .'|/(?'
                                    .'|edit(*:1432)'
                                    .'|delete(*:1447)'
                                .')'
                                .'|(*:1457)'
                            .')'
                            .'|rice\\-list/([^/]++)(?'
                                .'|/(?'
                                    .'|edit(*:1497)'
                                    .'|delete(*:1512)'
                                .')'
                                .'|(*:1522)'
                            .')'
                        .')'
                        .'|s(?'
                            .'|ection/([^/]++)(?'
                                .'|/(?'
                                    .'|edit(*:1563)'
                                    .'|delete(*:1578)'
                                .')'
                                .'|(*:1588)'
                            .')'
                            .'|lider(?'
                                .'|/([^/]++)(?'
                                    .'|/(?'
                                        .'|edit(*:1626)'
                                        .'|delete(*:1641)'
                                    .')'
                                    .'|(*:1651)'
                                .')'
                                .'|\\-image/([^/]++)(?'
                                    .'|/(?'
                                        .'|edit(*:1688)'
                                        .'|delete(*:1703)'
                                    .')'
                                    .'|(*:1713)'
                                .')'
                            .')'
                        .')'
                        .'|user/([^/]++)(?'
                            .'|/(?'
                                .'|edit(*:1749)'
                                .'|delete(*:1764)'
                            .')'
                            .'|(*:1774)'
                        .')'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:1817)'
                    .'|wdt/([^/]++)(*:1838)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:1881)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:1919)'
                                .'|router(*:1934)'
                                .'|exception(?'
                                    .'|(*:1955)'
                                    .'|\\.css(*:1969)'
                                .')'
                            .')'
                            .'|(*:1980)'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        40 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        75 => [[['_route' => 'api_genid', '_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], ['id'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        108 => [[['_route' => 'api_validation_errors', '_controller' => 'api_platform.action.not_exposed'], ['id'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        145 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        191 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        239 => [[['_route' => '_api_/carousels/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Carousel', '_api_operation_name' => '_api_/carousels/{id}{._format}_get', '_format' => null], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        262 => [[['_route' => '_api_/carousels{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Carousel', '_api_operation_name' => '_api_/carousels{._format}_get_collection', '_format' => null], ['_format'], ['GET' => 0], null, false, true, null]],
        307 => [[['_route' => '_api_/carousel_images/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => true, '_api_resource_class' => 'App\\Entity\\CarouselImage', '_api_operation_name' => '_api_/carousel_images/{id}{._format}_get', '_format' => null], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        330 => [[['_route' => '_api_/carousel_images{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => true, '_api_resource_class' => 'App\\Entity\\CarouselImage', '_api_operation_name' => '_api_/carousel_images{._format}_get_collection', '_format' => null], ['_format'], ['GET' => 0], null, false, true, null]],
        368 => [[['_route' => '_api_errors', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => null, '_api_resource_class' => 'ApiPlatform\\State\\ApiResource\\Error', '_api_operation_name' => '_api_errors', '_format' => null], ['status', '_format'], ['GET' => 0], null, false, true, null]],
        405 => [
            [['_route' => '_api_validation_errors_problem', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => null, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_problem', '_format' => null], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_validation_errors_hydra', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => null, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_hydra', '_format' => null], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_validation_errors_jsonapi', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => null, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_jsonapi', '_format' => null], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_validation_errors_xml', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => null, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_xml', '_format' => null], ['id'], ['GET' => 0], null, false, true, null],
        ],
        465 => [[['_route' => '_api_/details_section_images/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => true, '_api_resource_class' => 'App\\Entity\\DetailsSectionImage', '_api_operation_name' => '_api_/details_section_images/{id}{._format}_get', '_format' => null], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        488 => [[['_route' => '_api_/details_section_images{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => true, '_api_resource_class' => 'App\\Entity\\DetailsSectionImage', '_api_operation_name' => '_api_/details_section_images{._format}_get_collection', '_format' => null], ['_format'], ['GET' => 0], null, false, true, null]],
        532 => [[['_route' => '_api_/images/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Image', '_api_operation_name' => '_api_/images/{id}{._format}_get', '_format' => null], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        555 => [[['_route' => '_api_/images{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Image', '_api_operation_name' => '_api_/images{._format}_get_collection', '_format' => null], ['_format'], ['GET' => 0], null, false, true, null]],
        601 => [[['_route' => '_api_/messages/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Message', '_api_operation_name' => '_api_/messages/{id}{._format}_get', '_format' => null], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        627 => [
            [['_route' => '_api_/messages{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Message', '_api_operation_name' => '_api_/messages{._format}_get_collection', '_format' => null], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/messages{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Message', '_api_operation_name' => '_api_/messages{._format}_post', '_format' => null], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        674 => [[['_route' => '_api_/pages/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Page', '_api_operation_name' => '_api_/pages/{id}{._format}_get', '_format' => null], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        697 => [[['_route' => '_api_/pages{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Page', '_api_operation_name' => '_api_/pages{._format}_get_collection', '_format' => null], ['_format'], ['GET' => 0], null, false, true, null]],
        745 => [[['_route' => '_api_/price_lists/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => true, '_api_resource_class' => 'App\\Entity\\PriceList', '_api_operation_name' => '_api_/price_lists/{id}{._format}_get', '_format' => null], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        768 => [[['_route' => '_api_/price_lists{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => true, '_api_resource_class' => 'App\\Entity\\PriceList', '_api_operation_name' => '_api_/price_lists{._format}_get_collection', '_format' => null], ['_format'], ['GET' => 0], null, false, true, null]],
        818 => [[['_route' => '_api_/sections/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Section', '_api_operation_name' => '_api_/sections/{id}{._format}_get', '_format' => null], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        841 => [[['_route' => '_api_/sections{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Section', '_api_operation_name' => '_api_/sections{._format}_get_collection', '_format' => null], ['_format'], ['GET' => 0], null, false, true, null]],
        888 => [[['_route' => '_api_/sliders/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Slider', '_api_operation_name' => '_api_/sliders/{id}{._format}_get', '_format' => null], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        911 => [[['_route' => '_api_/sliders{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Slider', '_api_operation_name' => '_api_/sliders{._format}_get_collection', '_format' => null], ['_format'], ['GET' => 0], null, false, true, null]],
        956 => [[['_route' => '_api_/slider_images/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => true, '_api_resource_class' => 'App\\Entity\\SliderImage', '_api_operation_name' => '_api_/slider_images/{id}{._format}_get', '_format' => null], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        979 => [[['_route' => '_api_/slider_images{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => true, '_api_resource_class' => 'App\\Entity\\SliderImage', '_api_operation_name' => '_api_/slider_images{._format}_get_collection', '_format' => null], ['_format'], ['GET' => 0], null, false, true, null]],
        1016 => [
            [['_route' => '_api_/users{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => true, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users{._format}_get_collection', '_format' => null], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/users{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => true, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users{._format}_post', '_format' => null], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1055 => [
            [['_route' => '_api_/users/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => true, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_get', '_format' => null], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/users/{id}{._format}_put', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => true, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_put', '_format' => null], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/users/{id}{._format}_patch', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => true, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_patch', '_format' => null], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/users/{id}{._format}_delete', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => true, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_delete', '_format' => null], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        1107 => [[['_route' => 'admin_carousel_edit', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\CarouselCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CarouselCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        1122 => [[['_route' => 'admin_carousel_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\CarouselCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CarouselCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        1132 => [[['_route' => 'admin_carousel_detail', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\CarouselCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CarouselCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        1169 => [[['_route' => 'admin_carousel_image_edit', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\CarouselImageCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CarouselImageCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        1184 => [[['_route' => 'admin_carousel_image_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\CarouselImageCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CarouselImageCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        1194 => [[['_route' => 'admin_carousel_image_detail', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\CarouselImageCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CarouselImageCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        1248 => [[['_route' => 'admin_details_section_image_edit', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\DetailsSectionImageCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\DetailsSectionImageCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        1263 => [[['_route' => 'admin_details_section_image_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\DetailsSectionImageCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\DetailsSectionImageCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        1273 => [[['_route' => 'admin_details_section_image_detail', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\DetailsSectionImageCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\DetailsSectionImageCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        1308 => [[['_route' => 'admin_image_edit', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ImageCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ImageCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        1323 => [[['_route' => 'admin_image_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ImageCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ImageCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        1333 => [[['_route' => 'admin_image_detail', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ImageCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ImageCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        1370 => [[['_route' => 'admin_message_edit', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\MessageCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\MessageCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        1385 => [[['_route' => 'admin_message_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\MessageCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\MessageCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        1395 => [[['_route' => 'admin_message_detail', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\MessageCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\MessageCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        1432 => [[['_route' => 'admin_page_edit', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\PageCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\PageCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        1447 => [[['_route' => 'admin_page_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\PageCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\PageCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        1457 => [[['_route' => 'admin_page_detail', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\PageCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\PageCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        1497 => [[['_route' => 'admin_price_list_edit', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\PriceListCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\PriceListCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        1512 => [[['_route' => 'admin_price_list_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\PriceListCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\PriceListCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        1522 => [[['_route' => 'admin_price_list_detail', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\PriceListCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\PriceListCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        1563 => [[['_route' => 'admin_section_edit', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\SectionCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\SectionCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        1578 => [[['_route' => 'admin_section_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\SectionCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\SectionCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        1588 => [[['_route' => 'admin_section_detail', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\SectionCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\SectionCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        1626 => [[['_route' => 'admin_slider_edit', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\SliderCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\SliderCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        1641 => [[['_route' => 'admin_slider_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\SliderCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\SliderCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        1651 => [[['_route' => 'admin_slider_detail', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\SliderCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\SliderCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        1688 => [[['_route' => 'admin_slider_image_edit', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\SliderImageCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\SliderImageCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        1703 => [[['_route' => 'admin_slider_image_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\SliderImageCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\SliderImageCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        1713 => [[['_route' => 'admin_slider_image_detail', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\SliderImageCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\SliderImageCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        1749 => [[['_route' => 'admin_user_edit', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UserCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        1764 => [[['_route' => 'admin_user_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UserCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        1774 => [[['_route' => 'admin_user_detail', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UserCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        1817 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        1838 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        1881 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        1919 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        1934 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        1955 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        1969 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        1980 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
