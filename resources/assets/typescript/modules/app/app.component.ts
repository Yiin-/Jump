import { Component } from 'angular2/core';
import { RouteConfig, ROUTER_DIRECTIVES, ROUTER_PROVIDERS, LocationStrategy, Location, HashLocationStrategy } from 'angular2/router';
import {provide} from 'angular2/core';

import { DashboardComponent } from '../dashboard/dashboard.component';
import { HeroesComponent } from '../heroes/heroes/heroes.component';
import { HeroDetailComponent } from '../heroes/hero-detail/hero-detail.component';
import { HeroService } from '../heroes/hero/hero.service';

@Component({
  selector: 'my-app',
  templateUrl: 'app/app/app.component.html',
  styleUrls: ['app/app/app.component.css'],
  directives: [ROUTER_DIRECTIVES],
  providers: [
    ROUTER_PROVIDERS,
    provide(LocationStrategy, { useClass: HashLocationStrategy }),
    HeroService
  ]
})
@RouteConfig([
  {
    path: '/dashboard',
    name: 'Dashboard',
    component: DashboardComponent,
    useAsDefault: true
  },
  {
    path: '/detail/:id',
    name: 'HeroDetail',
    component: HeroDetailComponent
  },
  {
    path: '/heroes',
    name: 'Heroes',
    component: HeroesComponent
  }
])
export class AppComponent {
  title = 'Pasirinkite žmonių skaičių';
}
