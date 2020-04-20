import { Component, OnInit } from '@angular/core';
import { DealsService } from './deals.service';

declare var bootoast: any;

@Component({
  selector: 'app-deals',
  templateUrl: './deals.component.html',
  styleUrls: ['./deals.component.css']
})
export class DealsComponent implements OnInit {

  constructor(
    private _http: DealsService
  ) { }

  Deals = [];
  DealsType = [];
  getLeads(){
    var body = {
      '':''
    }
    this._http.showDealsContact(body).subscribe(
      (data : any) => {
        this.Deals = data;
      },
      (error) => {
        bootoast.toast({
          message: error.error.message,
          type: 'danger',
          position: 'top-right'
        });
      }
    )
  }
  getLeadsType(){
    var body = {
      '':''
    }
    this._http.show(body).subscribe(
      (data : any) => {
        this.DealsType = data;
      },
      (error) => {
        bootoast.toast({
          message: error.error.message,
          type: 'danger',
          position: 'top-right'
        });
      }
    )
  }

  ngOnInit() {
    this.getLeadsType();
    this.getLeads();
  }

}
