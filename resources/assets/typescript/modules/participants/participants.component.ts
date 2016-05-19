import { Component, OnInit } from 'angular2/core';
import { Router, ROUTER_DIRECTIVES } from 'angular2/router';

@Component({
  selector: 'Participants',
  templateUrl: 'app/participants/participants.component.html',
  styleUrls: ['app/participants/participants.component.css'],
  directives: [ROUTER_DIRECTIVES]
  // templateUrl: 'app/participants/participants.component.html',
  // styleUrls: ['app/participants/participants.component.css']
})
export class ParticipantsComponent {
  subTitle = 'Įrašykite žmonių skaičių';

  constructor(
    private _router: Router) {
  }

  gotoTime() {
    this._router.navigate(['time', {}]);
  }
}
