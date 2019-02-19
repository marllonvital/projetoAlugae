import { TestBed } from '@angular/core/testing';

import { PesquisaProdutoService } from './pesquisa-produto.service';

describe('PesquisaProdutoService', () => {
  beforeEach(() => TestBed.configureTestingModule({}));

  it('should be created', () => {
    const service: PesquisaProdutoService = TestBed.get(PesquisaProdutoService);
    expect(service).toBeTruthy();
  });
});
