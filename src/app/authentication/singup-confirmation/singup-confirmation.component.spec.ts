import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { SingupConfirmationComponent } from './singup-confirmation.component';

describe('SingupConfirmationComponent', () => {
  let component: SingupConfirmationComponent;
  let fixture: ComponentFixture<SingupConfirmationComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ SingupConfirmationComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(SingupConfirmationComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
