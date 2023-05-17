package colegioRitaLee;

public class NotasFaltas extends Boletim{
	private double notas;
	protected int faltas;
	protected String disciplina;
	private int semestre;
	private String curso;
	private int ra_aluno;
	

	public String mostrarBebida(){
		return 	
				"Notas: " + this.notas + 
				"\nFaltas: " + this.faltas +
				"\nDisciplina: " + this.semestre +
				"\nSemestre: " + this.semestre + 
				"\nCurso: " + this.getPreco() +
				"\nRa_Aluno: " + this.ra_aluno;
	}
	
	private String getPreco() {
		// TODO Auto-generated method stub
		return null;
	}

	public NotasFaltas() {
		//
	}

	public NotasFaltas(double vNotas, int vFaltas, String vDisciplina, int vSemestre, String vCurso, int vRa_aluno){
		
		
		
	}
	
	private void setPreco(double vPreco) {
		// TODO Auto-generated method stub
		
	}

	public boolean verificarPreco(double preco) {
		if(preco<5) {
			return true;
		}else {
			return false;
		
		}
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

	public void setFaltas(int faltas) {
		this.faltas = faltas;
	}

	public String getDisciplina() {
		return disciplina;
	}

	public void setDisciplina(String disciplina) {
		this.disciplina = disciplina;
	}

	public int getSemestre() {
		return semestre;
	}

	public void setSemestre(int semestre) {
		this.semestre = semestre;
	}

	public String getCurso() {
		return curso;
	}

	public void setCurso(String curso) {
		this.curso = curso;
	}

	public int getRa_aluno() {
		return ra_aluno;
	}

	public void setRa_aluno(int ra_aluno) {
		this.ra_aluno = ra_aluno;
	}
	
	
	
}
