//class Program
//{
//	static void Main(string[] args)
//	{
//		BusTaxi dev = new CompanyOilBusTaxi("ООО Бирхаб");
//		House house2 = dev.Create();

//		dev = new SchoolBusTaxi("Частный Такси");
//		House house = dev.Create();

//		Console.ReadLine();
//	}
//}
//абстрактный класс туристической компании
//abstract class BusTaxi
//{
//	public string Name { get; set; }

//	public BusTaxi(string n)
//	{
//		Name = n;
//	}
//	фабричный метод
//	abstract public House Create();
//}
//Автобусы для добывающих компаний
//class CompanyOilBusTaxi : BusTaxi
//{
//	public CompanyOilBusTaxi(string n) : base(n)
//	{ }

//	public override House Create()
//	{
//		return new CompanyOilHouse();
//	}
//}
//строит деревянные дома
//class SchoolBusTaxi : BusTaxi
//{
//	public SchoolBusTaxi(string n) : base(n)
//	{ }

//	public override House Create()
//	{
//		return new SchoolHouse();
//	}
//}

//abstract class Company
//{ }

//class CompanyOilHouse : House
//{
//	public CompanyOilHouse()
//	{
//		Console.WriteLine("Панельный дом построен");
//	}
//}
//class SchoolHouse : House
//{
//	public SchoolHouse()
//	{
//		Console.WriteLine("Деревянный дом построен");
//	}
//}


//interface MoveObj
//{
//	void Fly();
//}

//abstract class t2
//{
//	int c;

//	public abstract void Move();
//}

//class t1 : t2, MoveObj
//{
//	int a;
//	int b;
//	public void Fly()
//	{
//		Console.WriteLine("Взлетаем");
//	}

//	public override void Move()
//	{
//		Console.WriteLine("Самолет движется");
//	}


//}

//class Car : t2
//{
//	int a;
//	int b;
//	public override void Move()
//	{
//		Console.WriteLine("Транспортно средство движется");
//	}
//}
