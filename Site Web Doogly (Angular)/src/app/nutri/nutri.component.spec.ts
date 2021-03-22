import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { NutriComponent } from './nutri.component';

describe('NutriComponent', () => {
  let component: NutriComponent;
  let fixture: ComponentFixture<NutriComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ NutriComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(NutriComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
