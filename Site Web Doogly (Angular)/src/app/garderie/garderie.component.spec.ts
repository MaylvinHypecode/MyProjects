import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { GarderieComponent } from './garderie.component';

describe('GarderieComponent', () => {
  let component: GarderieComponent;
  let fixture: ComponentFixture<GarderieComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ GarderieComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(GarderieComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
