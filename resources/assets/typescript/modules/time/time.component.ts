import { Component, OnInit } from 'angular2/core';
import { Router, ROUTER_DIRECTIVES } from 'angular2/router';

@Component({
  selector: 'Time',
  templateUrl: 'app/time/time.component.html',
  styleUrls: ['app/time/time.component.css'],
  directives: [ROUTER_DIRECTIVES]
  // templateUrl: 'app/participants/participants.component.html',
  // styleUrls: ['app/participants/participants.component.css']
})
export class ParticipantsComponent {
  subTitle = 'Pasirinkite norimą laiką';

  constructor(
    private _router: Router) {
  }

  gotoTime() {
    this._router.navigate(['time', {}]);
  }
}
