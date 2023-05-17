package colegioRitaLee;

public abstract class Boletim {
	private int ra_aluno;
	String nome;
	private String curso;
	private String disciplina; 
	private double notas;
	private double faltas;
	
	public abstract String mostrarBebida();
	public abstract boolean verificarPreco(double preco);
	public int getRa_aluno() {
		return ra_aluno;
	}
	public void setRa_aluno(int ra_aluno) {
		this.ra_aluno = ra_aluno;
	}
	public String getNome() {
		return nome;
	}
	public void setNome(String nome) {
		this.nome = nome;
	}
	public String getCurso() {
		return curso;
	}
	public void setCurso(String curso) {
		this.curso = curso;
	}
	public String getDisciplina() {
		return disciplina;
	}
	public void setDisciplina(String disciplina) {
		this.disciplina = disciplina;
	}
	public double getNotas() {
		return notas;
	}
	public void setNotas(double notas) {
		this.notas = notas;
	}
	public double getFaltas() {
		return faltas;
	}
	public void setFaltas(double faltas) {
		this.faltas = faltas;
	}
	

	
	
}
