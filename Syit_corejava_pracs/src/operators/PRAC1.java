package operators;
import java.util.Scanner;

public class PRAC1 {

	public static void main(String[] args) {
		Scanner sc=new Scanner(System.in);
		System.out.print("Enter the number to Get its Multiplication Table:");
		int a=sc.nextInt();
		System.out.println("The Multiplication Table of:"+a+"is");
		for(int i=1;i<=10;i++) {
			
			System.out.println(a+"*"+i+"="+(a*i));
			
			
		}
		sc.close();
    
	}

}
