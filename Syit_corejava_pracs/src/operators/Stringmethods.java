package operators;

public class Stringmethods {

	public static void main(String[] args) {
	
		String s="JAVA";
		String s2="JAVA";
		System.out.println(s.equals(s2));
		System.out.println(s=s2);
		
System.out.println("Uppercase"+s.toUpperCase());	
System.out.println("Lowercase: "+s.toLowerCase());
System.out.println("Trim: "+s.trim());
System.out.println("CharAt: "+s.charAt(1));
System.out.println("length: "+s.length());
	}

}
