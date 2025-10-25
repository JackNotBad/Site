<?php

namespace App\Controller\Admin;

use App\Entity\Page;
use App\Entity\Image;
use App\Entity\Slider;
use App\Entity\Message;
use App\Entity\Section;
use App\Entity\Carousel;
use App\Entity\PriceList;
use App\Entity\SliderImage;
use App\Entity\CarouselImage;
use App\Controller\Admin\UserCrudController;
use Symfony\Component\HttpFoundation\Response;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Attribute\AdminDashboard;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;


#[AdminDashboard(routePath: '/admin', routeName: 'admin')]
class DashboardController extends AbstractDashboardController
{
    public function index(): Response
    {
        // return parent::index();
        $routeBuilder = $this->container->get(AdminUrlGenerator::class);
        $url = $routeBuilder->setController(UserCrudController::class)->generateUrl();
        return $this->redirect($url);

        // Option 1. You can make your dashboard redirect to some common page of your backend
        //
        // 1.1) If you have enabled the "pretty URLs" feature:
        // return $this->redirectToRoute('admin_user_index');
        //
        // 1.2) Same example but using the "ugly URLs" that were used in previous EasyAdmin versions:
        // $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
        // return $this->redirect($adminUrlGenerator->setController(OneOfYourCrudController::class)->generateUrl());

        // Option 2. You can make your dashboard redirect to different pages depending on the user
        //
        // if ('jane' === $this->getUser()->getUsername()) {
        //     return $this->redirectToRoute('...');
        // }

        // Option 3. You can render some custom template to display a proper dashboard with widgets, etc.
        // (tip: it's easier if your template extends from @EasyAdmin/page/content.html.twig)
        //
        // return $this->render('some/path/my-dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Bonjour');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Utilisateurs', 'fa fa-home');
        yield MenuItem::section('Contenu du site');
        yield MenuItem::linkToCrud('Page', 'fas fa-list', Page::class);
        yield MenuItem::linkToCrud('Sections', 'fas fa-list', Section::class);
        yield MenuItem::section("Composants d'images");
        yield MenuItem::linkToCrud('Images', 'fas fa-list', Image::class);
        yield MenuItem::linkToCrud('Carousel', 'fas fa-list', Carousel::class);
        yield MenuItem::linkToCrud('Images du Carousel', 'fas fa-list', CarouselImage::class);
        yield MenuItem::linkToCrud('Slides', 'fas fa-list', Slider::class);
        yield MenuItem::linkToCrud('Image des Slides', 'fas fa-list', SliderImage::class);
        yield MenuItem::section('Messages');
        yield MenuItem::linkToCrud('Messages', 'fas fa-list', Message::class);
        yield MenuItem::section('Tarfis');
        yield MenuItem::linkToCrud('Gérer les tarfis', 'fas fa-list', PriceList::class);
        // MenuItem::linkToCrud('Blog Posts', 'fa fa-file-text', BlogPost::class),
        // MenuItem::section('Users'),
        // MenuItem::linkToCrud('Comments', 'fa fa-comment', Comment::class),
        // yield MenuItem::linkToCrud('Carousel', 'fa fa-tags', Carousel::class);
        // MenuItem::linkToCrud('Users', 'fa fa-user', User::class),
    }
}
