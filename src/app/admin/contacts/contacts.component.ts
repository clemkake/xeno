import { Component, OnInit, Input, AfterViewInit } from '@angular/core';
import { ContactsService } from './contacts.service';

declare var bootoast: any;
declare var $:any;

@Component({
  selector: 'app-contacts',
  templateUrl: './contacts.component.html',
  styleUrls: ['./contacts.component.css']
})

export class ContactsComponent implements OnInit, AfterViewInit {



  constructor(
    private http: ContactsService
  ) { }

  Contacts = [];


  getContacts(){
    var body = {
      '':''
    }
    this.http.show(body).subscribe(
      (data: any) => {
        this.Contacts = data;
        this.convertToDataTable();
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
  convertToDataTable(){
    setTimeout(function(){
      var table = $('#contacts_table').DataTable({
        lengthChange: false,
        responsive: true,
        buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
      });
      table.buttons().container().appendTo('#contacts_table_wrapper .col-md-6:eq(0)');
    },1000)
  }

  ngOnInit() {
    this.getContacts();
  }

  ngAfterViewInit(){
    
  }

}
