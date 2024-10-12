using System.ComponentModel.DataAnnotations;

namespace BlazorAppPD_321
{
	public class Human
	{
		[Key]
		public int teacher_id { get; set; }
		public string last_name { get; set; }
		public string first_name { get; set; }
		public string middle_name { get; set; }
		public DataType dirthdate { get; set; }
		public string email { get; set; }
	}
}
