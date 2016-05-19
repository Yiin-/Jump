import { Component, OnInit } from 'angular2/core';
import { Router, ROUTER_DIRECTIVES } from 'angular2/router';

declare var Calendar: any;

@Component({
  selector: 'Time',
  templateUrl: 'app/time/time.component.html',
  directives: [ROUTER_DIRECTIVES]
  // templateUrl: 'app/participants/participants.component.html',
  // styleUrls: ['app/participants/participants.component.css']
})
export class TimeComponent implements OnInit{
  subTitle = 'Pasirinkite norimą laiką';

  constructor(
    private _router: Router) {
  }

  ngOnInit() {
    new Calendar('#calendar');
  }

  gotoTime() {
    this._router.navigate(['time', {}]);
  }
}
