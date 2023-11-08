<?php

namespace App\Controller\Admin;

use App\Entity\Boxeur;
use App\Entity\Typedeboxe;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class licenceController extends AbstractDashboardController
{
    public function __construct(private AdminUrlGenerator $adminUrlGenerator)
    {
        
    }
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
       $url = $this->adminUrlGenerator->setController(BoxeurCrudController::class)->generateUrl();

         //return $this->redirect($adminUrlGenerator->setController(OneOfYourCrudController::class)->generateUrl());
   return $this->redirect($url);
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Dash');
    }

    public function configureMenuItems(): iterable
    {
    yield MenuItem::section('licence');
    yield MenuItem::subMenu('licence','fas fa-bars')->setsubitems
    ([MenuItem::linkToCrud('add licence','fas fa-plus',Boxeur::class)->setAction(Crud::PAGE_NEW),
    MenuItem::linkToCrud('show licence','fas fa-eye',Boxeur::class)->setAction(Crud::PAGE_NEW),

]);
yield MenuItem::section('type de boxe');
    yield MenuItem::subMenu('forme de boxe','fas fa-bars')->setsubitems
    ([MenuItem::linkToCrud('add forme de boxe ','fas fa-plus',Typedeboxe::class)->setAction(Crud::PAGE_NEW),
    MenuItem::linkToCrud('show forme de boxe ','fas fa-eye',Typedeboxe::class)->setAction(Crud::PAGE_NEW),
]);
            //yield MenuItem::linkToCrud('The Label', 'fas fa-list', EntityClass::class);
    }
}
