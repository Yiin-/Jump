import { Component, OnInit, provide } from 'angular2/core';
import { RouteConfig, ROUTER_DIRECTIVES, ROUTER_PROVIDERS, LocationStrategy, Location, HashLocationStrategy, Router } from 'angular2/router';

import { ParticipantsComponent } from '../participants/participants.component';
// import { TimeComponent } from '../time/time.component';

import { HeroesComponent } from '../heroes/heroes/heroes.component';
import { HeroDetailComponent } from '../heroes/hero-detail/hero-detail.component';
import { HeroService } from '../heroes/hero/hero.service';

@Component({
  selector: 'my-app',
  template: `<router-outlet></router-outlet>`,
  directives: [ROUTER_DIRECTIVES],
  providers: [
    ROUTER_PROVIDERS,
    provide(LocationStrategy, { useClass: HashLocationStrategy })
  ]
})
@RouteConfig([
  {
    path: '/participants',
    name: 'Participants',
    component: ParticipantsComponent,
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
export class AppComponent implements OnInit {
  constructor(private router: Router) {}

  ngOnInit() {
      this.router.navigate(['Participants']);
  }
}
