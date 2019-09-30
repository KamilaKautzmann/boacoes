<h1>Instituições</h1>
<h3>Formulário de Instituições</h3>

<?php echo form_open('instituicao/salvar'); ?>

<label for="nome">Nome</label>
<input type="input" name="nome" /><br />

<label for="text">Descrição</label>
<input type="input" name="descricao"><br />

<label for="text">Especialidade</label>
<input type="input" name="especialidade"><br />

<label for="text">Endereço</label>
<input type="input" name="endereco"><br />

<label for="text">Telefone</label>
<input type="input" name="telefone"><br />

<input type="submit" name="submit" value="Salvar" />

</form>