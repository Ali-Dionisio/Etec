package colegioRitaLee;

public class Curso extends Boletim{
	private String curso;
	private String periodo;
	private int ra_aluno;


	public String mostrarBebida(){
		return "Curso: " + this.getCurso() + 
				"\nPeriodo: " + this.getPeriodo() +
				"\nRA_Aluno: " + this.ra_aluno;
	}
	
	public Curso() {
		//
	}

	public Curso(String vCurso, String vPeriodo, int vRa_aluno){ //Vinho = construtor
		this.setCurso(vCurso);
		this.setPeriodo(vPeriodo);
		this.ra_aluno = vRa_aluno;
		
		
	}
	
	public boolean verificarPreco(double preco) {
		if(preco<2.5) {
			return true;
		}else {
			return false;
		
		}
	}

	public String getCurso() {
		return curso;
	}

	public void setCurso(String curso) {
		this.curso = curso;
	}

	public String getPeriodo() {
		return periodo;
	}

	public void setPeriodo(String periodo) {
		this.periodo = periodo;
	}

	public int getRa_aluno() {
		return ra_aluno;
	}

	public void setRa_aluno(int ra_aluno) {
		this.ra_aluno = ra_aluno;
	}
	

	
	
	
}
