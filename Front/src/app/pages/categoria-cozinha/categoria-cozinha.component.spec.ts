import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { CategoriaCozinhaComponent } from './categoria-cozinha.component';

describe('CategoriaCozinhaComponent', () => {
  let component: CategoriaCozinhaComponent;
  let fixture: ComponentFixture<CategoriaCozinhaComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ CategoriaCozinhaComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(CategoriaCozinhaComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
